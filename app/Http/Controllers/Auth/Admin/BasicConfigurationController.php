<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Models\AssignClasses;
use App\Models\Master_classes;
use App\Models\Master_session;
use App\Models\Master_subjects;
use App\Models\MasterConfiguration;
use App\Models\Mastermodule;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasicConfigurationController extends Controller
{
    public function store(Request $request)
    {
        $school_id = $request->input('school');
        $sessionID = $request->input('session');

        $academicYear = Master_session::find($sessionID);
        $school = User::find($school_id);

        $assignClassStatus = MasterConfiguration::where('school_id', $school_id)
        ->where('session_id', $sessionID)
        ->value('assign_class');

        return view('admin.basic_configuration.index', compact('school', 'academicYear', 'assignClassStatus'));
    }

    public function getClass(Request $request)
    {
        $school_id = $request->input('school');
        $sessionID = $request->input('session');

        $academicYear = Master_session::find($sessionID);
        $school = User::find($school_id);
        $classes = Master_classes::all();

        $rawAssignments = AssignClasses::where('school_id', $school_id)
            ->where('session_id', $sessionID)
            ->get()
            ->flatMap(function ($item) {
                return is_array($item->masterClass_id) ? $item->masterClass_id : json_decode($item->masterClass_id, true);
            });

        $assignedClasses = [];
        foreach ($rawAssignments as $entry) {
            if (strpos($entry, ':') !== false) {
                [$id, $name] = explode(':', $entry, 2);
                $assignedClasses[(int)$id] = $name;
            }
        }
        return view('admin.basic_configuration.class', compact('classes', 'school', 'academicYear', 'assignedClasses'));
    }


    public function classInsert(Request $request)
    {
        $request->validate([
            'school_id' => 'required|exists:users,id',
            'session' => 'required|exists:schoolsessions,id',
            'selectedClasses' => 'required|array',
        ]);

        $status = $request->input('status', 1); 

        $selectedClassesRaw = $request->input('selectedClasses');
        $selectedClasses = is_string($selectedClassesRaw) ? json_decode($selectedClassesRaw, true) : $selectedClassesRaw;
        $selectedClasses = array_map('intval', $selectedClasses);
        
        $formattedClassList = [];
        foreach ($selectedClasses as $classId) {
            $renameKey = 'reClassName' . $classId;
            $customName = $request->input($renameKey);

            if ($customName && trim($customName) !== '') {
                $className = $customName;
            } else {
                $original = \App\Models\Master_classes::find($classId);
                $className = $original ? $original->class_name : 'Unknown';
            }

            $formattedClassList[] = "$classId:$className";
        }

        AssignClasses::updateOrCreate(
            [
                'school_id' => $request->school_id,
                'session_id' => $request->session,
            ],
            [
                'masterClass_id' => json_encode($formattedClassList),
                'status' => $status,
            ]
        );

        if ($status == 1) {
            MasterConfiguration::updateOrCreate(
                [
                    'school_id' => $request->school_id,
                    'session_id' => $request->session,
                ],
                [
                    'assign_class' => $status
                ]
            );
        }
        return redirect()->route('basic-configuration.store', [
            'school' => $request->school_id,
            'session' => $request->session,
        ])->with('success', 'Class assignments saved successfully!');
    }


    public function getSection()
    {
        return view('admin.basic_configuration.section');
    }


    
    public function getSubject()
    {
        return view('admin.basic_configuration.subject');
    }
    public function getTerms()
    {
        return view('admin.basic_configuration.term');
    }
    public function setSession()
    {
        return view('admin.basic_configuration.sessionSet');
    }
    public function setStudentForm()
    {
        return view('admin.basic_configuration.student_form');
    }
    public function setStaffForm()
    {
        return view('admin.basic_configuration.staff_form');
    }

    public function schoolTerms()
    {
        return view('admin.basic_configuration.termToSchool');
    }
    public function classTerms()
    {
        return view('admin.basic_configuration.termsToClass');
    }

    public function subjectToSchool()
    {
        $subjects = Master_subjects::all();
        return view('admin.basic_configuration.subjectToSchool', compact('subjects'));
    }
    public function subjectToClass()
    {
        return view('admin.basic_configuration.subjectToClass');
    }
    public function subjectType()
    {
        return view('admin.basic_configuration.subjectType');
    }
    public function subjectToModule()
    {
        return view('admin.basic_configuration.subjectToModule');
    }
    public function moduleconfig()
    {
        return view('admin.basic_configuration.module_config');
    }
}

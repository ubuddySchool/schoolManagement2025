<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Models\AssignClasses;
use App\Models\AssignModule;
use App\Models\AssignSections;
use App\Models\Master_classes;
use App\Models\Master_session;
use App\Models\Master_subjects;
use App\Models\StudentFormList;
use App\Models\StudentCat;
use App\Models\AssignStudentForm;

use App\Models\MasterConfiguration;
use App\Models\Mastermodule;
use App\Models\Schoolsession;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasicConfigurationController extends Controller
{
    public function store(Request $request)
    {
        $id = $request->query('id');
        $schoolSession = Schoolsession::where('id', $id)->first();
        $school_id = $schoolSession->school_id;
        $sessionID = $schoolSession->session_id;
        $academicYear = Master_session::find($sessionID);
        $school = User::find($school_id);
        
        $assignClassStatus = MasterConfiguration::where('school_id', $school_id)
            ->where('session_id', $sessionID)
            ->value('assign_class');

        $assignSectionStatus = MasterConfiguration::where('school_id', $school_id)
            ->where('session_id', $sessionID)
            ->value('assign_section');

        $studentModuleStatus = MasterConfiguration::where('school_id', $school_id)
        ->where('session_id', $sessionID)
        ->value('assign_subject_to_module');

        return view('admin.basic_configuration.index',compact('school_id','sessionID','school','academicYear','id','assignClassStatus','studentModuleStatus', 'assignSectionStatus'));

    }

    public function getClass(Request $request)
    {
        $ids = $request->query('id');

        $schoolSession = Schoolsession::where('id', $ids)->first();

        $school_id = $schoolSession->school_id;
        $sessionID = $schoolSession->session_id;
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
        return view('admin.basic_configuration.class', compact('ids', 'classes', 'school', 'academicYear', 'assignedClasses'));
    }


    public function classInsert(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'school_id' => 'required|exists:users,id',
            'session' => 'required|exists:schoolsessions,id',
            'selectedClasses' => 'required|array',
        ]);

        $status = $request->input('status', 1);

        $id = $request->input('id');
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
                $original = Master_classes::find($classId);
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
            'id' => $id,
        ])->with('success', 'Class assignments saved successfully!');
    }


    public function getSection(Request $request)
    {
        $ids = $request->query('id');
        $schoolSession = Schoolsession::where('id', $ids)->first();

        $school_id  = $schoolSession->school_id;
        $sessionID = $schoolSession->session_id;
        $academicYear = Master_session::find($sessionID);
        $school = User::find($school_id);

        $rawAssignments = AssignClasses::where('school_id', $school_id)
            ->where('session_id', $sessionID)
            ->get()
            ->flatMap(function ($item) {
                return is_array($item->masterClass_id) ? $item->masterClass_id : json_decode($item->masterClass_id, true);
            });

        $classes = [];
        foreach ($rawAssignments as $entry) {
            if (strpos($entry, ':') !== false) {
                [$id, $name] = explode(':', $entry, 2);
                $classes[(int)$id] = $name;
            }
        }

        $assignSections = AssignSections::where('school_id', $school_id)
            ->where('session_id', $sessionID)
            ->get()
            ->mapWithKeys(function ($item) {
                return [
                    $item->class_id => $item->section_name, // section_name is a JSON array
                ];
            });
        return view('admin.basic_configuration.section', compact(
            'ids', 'classes', 'school', 'academicYear', 'assignSections'
        ));            
    }


    public function sectionInsert(Request $request)
    {
        $request->validate([
            'school_id' => 'required|exists:users,id',
            'session' => 'required|exists:schoolsessions,id',
            'class_id' => 'required|array',
            'sections' => 'required|array',
        ]);
    
        $id = $request->input('id');
        $schoolId = $request->input('school_id');
        $sessionId = $request->input('session');
        $status = $request->input('status', 1);
        $sectionsInput = $request->input('sections'); // ['1' => ['A', 'B'], '2' => ['C']]
    
        DB::beginTransaction();
        try {
            foreach ($sectionsInput as $classId => $sectionList) {
                // Clean and filter section names
                $cleanedSections = array_filter(array_map(function ($section) {
                    return strtoupper(trim($section));
                }, $sectionList));
    
                if (!empty($cleanedSections)) {
                    // Save all sections for this class as a JSON array
                    AssignSections::updateOrCreate(
                        [
                            'school_id' => $schoolId,
                            'session_id' => $sessionId,
                            'class_id' => $classId,
                        ],
                        [
                            'section_name' => $cleanedSections, // JSON array
                            'status' => $status,
                        ]
                    );
                }
            }
    
            DB::commit();
            
            if ($status == 1) {
                MasterConfiguration::updateOrCreate(
                    [
                        'school_id' => $request->school_id,
                        'session_id' => $request->session,
                    ],
                    [
                        'assign_section' => $status
                    ]
                );
            }
            return redirect()->route('basic-configuration.store', ['id' => $id])
                ->with('success', 'Class assignments saved successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Error saving sections: ' . $e->getMessage());
        }
    }
    

    public function getSubject(Request $request)
    {
        $ids = $request->query('id');
        $schoolSession = Schoolsession::where('id', $ids)->first();

        $school_id  = $schoolSession->school_id;
        $sessionID = $schoolSession->session_id;
        $academicYear = Master_session::find($sessionID);
        $school = User::find($school_id);
        return view('admin.basic_configuration.subject', compact('ids', 'school', 'academicYear'));
    }
    
    public function subjectToSchool(Request $request)
    {
        $ids = $request->query('id');
        $schoolSession = Schoolsession::where('id', $ids)->first();

        $school_id  = $schoolSession->school_id;
        $sessionID = $schoolSession->session_id;
        $academicYear = Master_session::find($sessionID);
        $school = User::find($school_id);
        $subjects = Master_subjects::all();
        return view('admin.basic_configuration.subjectToSchool', compact('ids', 'school', 'academicYear', 'subjects'));
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


    public function getTerms()
    {
        return view('admin.basic_configuration.term');
    }
    public function setSession(Request $request)
    {
        // $id = $request->input(key: 'id');

        // $schoolSession = Schoolsession::where('id', $id)->first();


        $school_id = $request->input('sch_id');
        $sessionID = $request->input('sess_id');

        $schoolSession = Schoolsession::where('school_id', $school_id)
            ->where('session_id', $sessionID)->first();

        $start_date = $schoolSession->start_date;
        $end_date = $schoolSession->end_date;
        $id = $schoolSession->id;


        $academicYear = Master_session::find($sessionID);
        $school = User::find($school_id);

        return view('admin.basic_configuration.sessionSet', compact('school_id', 'sessionID', 'school', 'academicYear', 'id', 'start_date', 'end_date'));
    }
    public function setSession_create(Request $request)
    {
        $request->validate([
            'start_date' => 'nullable|date_format:d-m-Y',
            'end_date' => 'nullable|date_format:d-m-Y|after_or_equal:start_date',
        ]);

        $id = $request->input('id');
        $schoolSession = Schoolsession::where('id', $id)->firstOrFail();
        $school_id = $schoolSession->school_id;
        $data = [];

        if (!empty($request->start_date)) {
            $data['start_date'] = Carbon::createFromFormat('d-m-Y', $request->start_date)->format('Y-m-d');
        }

        if (!empty($request->end_date)) {
            $data['end_date'] = Carbon::createFromFormat('d-m-Y', $request->end_date)->format('Y-m-d');
        }

        if (!empty($data)) {
            SchoolSession::updateOrCreate(
                ['school_id' => $schoolSession->school_id, 'session_id' => $schoolSession->session_id],
                $data
            );
        }


        return redirect()->route('configuration.sessionConfig', ['id' => $school_id])->with([
            'success' => 'School session updated successfully.',
        ]);
    }

    public function setStudentForm(Request $request)
    {
        $id = $request->input('id');
        $schoolSession = Schoolsession::where('id', $id)->first();
        $school_id = $schoolSession->school_id;
        $sessionID = $schoolSession->session_id;
        $academicYear = Master_session::find($sessionID);
        $school = User::find($school_id);

        $categories = StudentCat::with('formFields')->orderBy('id')->get();

        $labels = StudentFormList::orderBy('cat_id')->orderBy('id')->get();
        
        $existingForm = AssignStudentForm::where('school_id', $school_id)
        ->where('session_id', $sessionID)
        ->first();

        $selectedFormFieldIds = $existingForm ? json_decode($existingForm->auth_form_id, true) : [];

          return view('admin.basic_configuration.student_form', compact(
        'sessionID', 'academicYear', 'school', 'labels', 'categories', 'selectedFormFieldIds','id'
    ));
    }

    public function setStudentFormstore(Request $request)
{
    $request->validate([
        'school_id'    => 'required|integer',
        'session'      => 'required|integer',
        'form_fields'  => 'required|array',
    ]);

    $formFields = array_map('intval', $request->form_fields);

    $status = $request->has('save_and_lock') ? 1 : 0;

    $existing = AssignStudentForm::where('school_id', $request->school_id)
        ->where('session_id', $request->session)
        ->first();

    if ($existing) {
        $existing->update([
            'auth_form_id' => json_encode($formFields),
            'status'       => $status,
        ]);
    } else {
       
        AssignStudentForm::create([
            'school_id'    => $request->school_id,
            'session_id'   => $request->session,
            'auth_form_id' => json_encode($formFields),
            'status'       => $status,
        ]);
    }

    if ($status == 1) {
        MasterConfiguration::updateOrCreate(
            [
                'school_id' => $request->school_id,
                'session_id' => $request->session,
            ],
            [
                'assign_subject_to_module' => $status
            ]
        );
    }

    $mainID = Schoolsession::where('school_id',$request->school_id)
                ->where('session_id',$request->session)
                ->value('id');

    return redirect()->route('basic-configuration.store',['id' => $mainID])->with([
        'success' => 'Form data saved successfully.',
     ]);
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

    public function moduleconfig()
    {
        return view('admin.basic_configuration.module_config');
    }
}

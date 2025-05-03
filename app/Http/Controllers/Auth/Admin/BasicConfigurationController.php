<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Models\Master_classes;
use App\Models\Master_subjects;
use App\Models\SchoolSession;
use App\Models\Master_session;
use App\Models\User;
use Carbon\Carbon;
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
        return view('admin.basic_configuration.index',compact('school_id','sessionID','school','academicYear'));
    }
    public function getClass(Request $request)
    {
        $school_id = $request->input('school');
        $sessionID = $request->input('session'); 
        $academicYear = Master_session::find($sessionID);
        $school = User::find($school_id);
        $classes = Master_classes::all();
        return view('admin.basic_configuration.class', compact('classes','school_id','sessionID','school','academicYear'));
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
    public function setSession(Request $request)
    {
        $school_id = $request->input('school');
        $sessionID = $request->input('session'); 
        $academicYear = Master_session::find($sessionID);
        $school = User::find($school_id);
        return view('admin.basic_configuration.sessionSet',compact('school_id','sessionID','school','academicYear'));
    }
    public function setSession_create(Request $request)
{
    $request->validate([
        'start_date' => 'required|date_format:d-m-Y',
        'end_date' => 'required|date_format:d-m-Y|after_or_equal:start_date',
        'school_id' => 'required|integer',
        'session_id' => 'required|integer',
    ]);

    $startDate = Carbon::createFromFormat('d-m-Y', $request->start_date)->format('Y-m-d');
    $endDate = Carbon::createFromFormat('d-m-Y', $request->end_date)->format('Y-m-d');

    SchoolSession::updateOrCreate(
        ['school_id' => $request->school_id, 'session_id' => $request->session_id],
        ['start_date' => $startDate, 'end_date' => $endDate]
    );

    return redirect()->route('basic-configuration.store')->with([
        'success' => 'School session updated or created successfully.',
        'school' => $request->school_id,
        'session' => $request->session_id,
    ]);
    
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

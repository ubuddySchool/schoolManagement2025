<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicConfigurationController extends Controller
{
    public function store()
    {
        return view('admin.basic_configuration.index');
    }
    public function getClass()
    {
        return view('admin.basic_configuration.class');
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
        return view('admin.basic_configuration.subjectToSchool');
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

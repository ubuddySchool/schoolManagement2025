<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModuleConfigurationController extends Controller
{
    public function moduleconfig()
    {
        return view('admin.module_configuration.index');
    }
    public function enquiry()
    {
        return view('admin.module_configuration.enquiry');
    }
    public function student_management()
    {
        return view('admin.module_configuration.student_management');
    }
    public function result()
    {
        return view('admin.module_configuration.result');
    }
    public function grade()
    {
        return view('admin.module_configuration.grade');
    }
    public function resultType()
    {
        return view('admin.module_configuration.resultType');
    }
    public function markPattern()
    {
        return view('admin.module_configuration.markingPattern');
    }
    
    public function markAttendance()
    {
        return view('admin.module_configuration.attendance');
    }
    public function admitCard()
    {
        return view('admin.module_configuration.admitCard');
    }
    public function annualCalender()
    {
        return view('admin.module_configuration.annualCalender');
    }
    public function certificate()
    {
        return view('admin.module_configuration.certificate');
    }
    public function feeManagement()
    {
        return view('admin.module_configuration.fee');
    }
    public function vehicleManagement()
    {
        return view('admin.module_configuration.transportation');
    }
    public function registration_form()
    {
        return view('admin.module_configuration.registration_form');
    }
    public function admission_form()
    {
        return view('admin.module_configuration.admission_form');
    }
    public function resultLayout()
    {
        return view('admin.module_configuration.result_layout');
    }
    public function assign_houses()
    {
        return view('admin.module_configuration.assignHouse');
    }
}

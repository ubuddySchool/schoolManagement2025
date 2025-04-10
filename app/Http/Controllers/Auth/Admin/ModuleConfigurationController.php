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
    public function registration_form()
    {
        return view('admin.module_configuration.registration_form');
    }
    public function admission_form()
    {
        return view('admin.module_configuration.admission_form');
    }
}

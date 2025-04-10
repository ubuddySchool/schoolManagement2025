<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssignSchoolcontroller extends Controller
{
    public function index(){
        return view('admin.assign_school.index');
    }
}

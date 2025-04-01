<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentManagment extends Controller
{
    public function subject_assign(){
        return view('school.student_management.subject_assign');
    }
}

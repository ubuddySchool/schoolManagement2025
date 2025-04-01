<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentManagment extends Controller
{
    public function subject_assign(){
        return view('school.student_management.subject_assign');
    }
    
    public function promote_detention(){
        return view('school.student_management.promote_detention');
    }

    public function termination(){
        return view('school.student_management.termination');
    }
    public function assign_section(){
        return view('school.student_management.assign_section');
    }

}

<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function staff(){
        return view('school.attendance.staff.index');
    }
    public function addstaff(){
        return view('school.attendance.staff.addstaff_attendance');
    }
    public function student(){
        return view('school.attendance.student.index');
    }
    public function addstudent(){
        return view('school.attendance.student.add_student');
    }
    public function holiday(){
        return view('school.attendance.holiday.index');
    }
}

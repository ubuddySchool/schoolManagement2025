<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    public function timetable(){
        return view('school.timetable.index');
    }
    public function add_timetable(){
        return view('school.timetable.add_timetable');
    }
    public function edit_timetable(){
        return view('school.timetable.edit_timetable');
    }
}

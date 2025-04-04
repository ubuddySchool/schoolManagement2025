<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SyllabusController extends Controller
{
    public function syllabus(){
        return view('school.syllabus.syllabus_index');
    }
    public function add_syllabus(){
        return view('school.syllabus.add_syllabus');
    }
    public function edit_syllabus(){
        return view('school.syllabus.edit_syllabus');
    }
}

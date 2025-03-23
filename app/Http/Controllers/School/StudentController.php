<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request){
        return view('school.student.index');
    }
    public function add(Request $request){
        return view('school.student.add');
    }
    public function edit(Request $request){
        return view('school.student.edit');
    }
    public function show(Request $request){
        return view('school.student.show');
    }
    public function enquiry(Request $request){
        return view('school.student_enquiry.index');
    }
    public function add_enquiry(Request $request){
        return view('school.student_enquiry.add_enquiry');
    }
}

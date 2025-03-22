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
}

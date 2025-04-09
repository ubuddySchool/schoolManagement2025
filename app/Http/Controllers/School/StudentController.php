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
    public function export_stuDetails(Request $request){
        return view('school.student.export_stuDetails');
    }
    public function enquiry(Request $request){
        return view('school.student_enquiry.index');
    }
    public function add_enquiry(Request $request){
        return view('school.student_enquiry.add_enquiry');
    }
    public function follow_up(Request $request){
        return view('school.student_enquiry.follow_up');
    }
    
    public function registration_feespaid(Request $request){
        return view('school.student_enquiry.fees.registration_feespaid');
    }
    public function admission_feespaid(Request $request){
        return view('school.student_enquiry.fees.admission_feespaid');
    }
    public function registration_feesunpaid(Request $request){
        return view('school.student_enquiry.fees.registration_fees');
    }
    public function admission_feesunpaid(Request $request){
        return view('school.student_enquiry.fees.admission_fees');
    }
}

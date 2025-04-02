<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmitController extends Controller
{
    public function admit_index(){
        return view('school.admit.index');
    }
    public function admit_rollno(){
        return view('school.admit.admitrollno');
    }
    public function admit_layout(){
        return view('school.admit.layout');
    }
    public function configration(){
        return view('school.admit.configration');
    }
}

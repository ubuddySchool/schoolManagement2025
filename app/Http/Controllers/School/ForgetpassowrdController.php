<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgetpassowrdController extends Controller
{
    public function forgot_password(){
        return view('school.forgot-password.forgot-password');
    }
}

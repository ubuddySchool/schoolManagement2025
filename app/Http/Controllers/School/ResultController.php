<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function result(){
        return view('school.result.index_result');
    }
    public function add_division(){
        return view('school.result.add_division');
    }
    public function add_marksheet(){
        return view('school.result.add_marksheet');
    }
    public function view_marksheet(){
        return view('school.result.view_marksheet');
    }
    public function empty_marksheet(){
        return view('school.result.empty_marksheet');
    }
    public function filled_marksheet(){
        return view('school.result.filled_marksheet');
    }
}

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
    public function edit_empty_marksheet(){
        return view('school.result.emptyedit_marksheet');
    }
    public function edit_filled_marksheet(){
        return view('school.result.fillededit_marksheet');
    }
    public function lock_result(){
        return view('school.result.lock_result');
    }
    public function lock_term(){
        return view('school.result.lock_term');
    }
    public function lock_class(){
        return view('school.result.lock_class');
    }
    public function lock_subject(){
        return view('school.result.lock_subject');
    }
}

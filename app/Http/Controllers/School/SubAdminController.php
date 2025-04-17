<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubAdminController extends Controller
{
    public function main()
    {
        return view('school.sub_admin.index');
    }
    public function addNew()
    {
        return view('school.sub_admin.add_subAdmin');
    }
    public function permission()
    {
        return view('school.sub_admin.module_permission');
    }
}

<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Add this at the top of your controller

class AssignModuleController extends Controller
{

    public function assignmodule()
    {
        $modules = DB::table('master_modules')->get();
        return view('admin.assign_module.index', compact('modules'));
    }

}

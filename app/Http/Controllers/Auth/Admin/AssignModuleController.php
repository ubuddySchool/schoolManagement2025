<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssignModuleController extends Controller
{
    public function assignmodule()
    {
        return view('admin.assign_module.index');
    }
}

<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigurationAdminController extends Controller
{
    public function main()
    {
        return view('admin.admin_configuration.index');
    }
    public function addNewAdmin()
    {
        return view('admin.admin_configuration.create');
    }
}

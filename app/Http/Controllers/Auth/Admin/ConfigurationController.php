<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    public function index()
    {
        return view('admin.configuration.index');
    }
    public function moduleconfig()
    {
        return view('admin.basic_configuration.module_config');
    }
}

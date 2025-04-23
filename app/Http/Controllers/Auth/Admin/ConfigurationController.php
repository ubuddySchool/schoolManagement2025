<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    public function index(Request $request)
    {
        $selectedOption = $request->input('option');
        return view('admin.configuration.index', compact('selectedOption'));
    }

    public function session()
    {
        return view('admin.configuration.sessionConfig');
    }
    public function index_old()
    {
        return view('admin.configuration.index');
    }
    public function moduleconfig()
    {
        return view('admin.basic_configuration.module_config');
    }
}

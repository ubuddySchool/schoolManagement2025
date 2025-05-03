<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Models\Master_session;
use App\Models\User;
use App\Models\Schoolsession;
use App\Models\Mastermodule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfigurationController extends Controller
{
    // public function index(Request $request)
    // {
    //     $selectedOption = $request->input('option');
    //     return view('admin.configuration.index', compact('selectedOption'));
    // }

    public function index(Request $request)
    {
        $schoolID = $request->input('school');
        $sessionID = $request->input('session'); 

        $academicYear = Master_session::find($sessionID);
        $school = User::find($schoolID);

        return view('admin.configuration.index', compact('school', 'academicYear'));
    }



    public function session($id)
    {
        // $academicYears = DB::table('schoolsession')
        //                     ->orderByDesc('school_session')
        //                     ->get();

         $academicYears = Master_session::orderByDesc('id')
                            ->get();

        $school = User::findOrFail($id);

        return view('admin.configuration.sessionConfig', compact('academicYears', 'school'));
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

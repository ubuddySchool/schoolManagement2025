<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\schoolsession;
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
    $school = $request->input('school');
    $academicYear = $request->input('session'); 
    
   
    // $school = schoolsession::find($school);
    // $academicYear = Mastermodule::where('school_id', $academicYear)
    //                             ->where('school_session', $session)
    //                             ->first();
    
    return view('admin.configuration.index', compact('school', 'academicYear'));
}


    public function session($id)
    {
        $academicYears = DB::table('schoolsession')
                            ->orderByDesc('school_session')
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

<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Models\Master_session;
use App\Models\User;
use App\Models\Schoolsession;
use App\Models\Mastermodule;
use App\Models\MasterConfiguration;
use Illuminate\Http\Request;
use App\Models\AssignModule;
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
        $schoolID = $request->query('sch_id'); 
        $sessionID = $request->query('sess_id'); 
        $mainID = Schoolsession::where('school_id',$schoolID)
                    ->where('session_id',$sessionID)
                    ->value('id');

        $academicYear = Master_session::find($sessionID);
        $school = User::find($schoolID);
        
        $master_config = MasterConfiguration::where('school_id',$schoolID)
        ->where('session_id',$sessionID)
        ->get();

        $assignModule = MasterConfiguration::where('school_id', $schoolID)
        ->where('session_id', $sessionID)
        ->value('assign_module');
       
       
        return view('admin.configuration.index', compact('school', 'academicYear','master_config','assignModule','mainID'));
    }



    public function session($id)
    {
     
         $academicYears = Master_session::orderByDesc('id')
                            ->get();

        $school = User::findOrFail($id);
        return view('admin.configuration.sessionConfig', compact('academicYears', 'school','id'));
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

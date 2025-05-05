<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mastermodule;
use App\Models\AssignModule;
use App\Models\MasterConfiguration;
use App\Models\Master_session;
use App\Models\Schoolsession;
use Illuminate\Support\Facades\DB; 

class AssignModuleController extends Controller
{

    public function assignmodule(Request $request)
    {

        $main_id = $request->input('main_id');

        $schoolSession = Schoolsession::where('id', $main_id)->first();

        $school_id = $schoolSession->school_id;
        $sessionID = $schoolSession->session_id;
        
        $academicYear = Master_session::find($sessionID);
        $modules = Mastermodule::all();
        $school = User::find($school_id);
    
        $assignedModuleIds = AssignModule::where('school_id', $school_id)
        ->where('session_id', $sessionID)
        ->get()
        ->flatMap(function ($item) {
            return $item->module_id;
        })
        ->unique()
        ->values()
        ->toArray();
    
        return view('admin.assign_module.index', compact('modules', 'school', 'academicYear', 'assignedModuleIds','school_id','sessionID'));
    }

public function assingstore(Request $request)
{
    $validated = $request->validate([
        'school_id' => 'required|exists:users,id',
        'session' => 'required|exists:master_sessions,id',
       'modules' => 'required|array',
    ]);

    $schoolId = $validated['school_id'];
    $sessionId = $validated['session'];
    $modules = $validated['modules'];
    $status = $request->input('status', 1); 

    $modulesRaw = $request->input('modules');
            $modules = is_string($modulesRaw) ? json_decode($modulesRaw, true) : $modulesRaw;
            $modules = array_map('intval', $modules);
            
    AssignModule::updateOrCreate(
        [
            'school_id' => $schoolId,
            'session_id' => $sessionId,
        ],
        [
            'module_id' => $modules,
            'status' => $status,
        ]
    );

    if ($status == 1) {
        MasterConfiguration::updateOrCreate(
            [
                'school_id' => $schoolId,
                'session_id' => $sessionId,
            ],
            [
                'assign_module' => $status
            ]
        );
    }

    return redirect()->route('configuration.index', [
        'school' => $schoolId,
        'session' => $sessionId
    ])->with('success', 'Modules assigned successfully!');
}


}

<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mastermodule;
use App\Models\AssignModule;
use App\Models\Master_session;
use App\Models\Schoolsession;
use Illuminate\Support\Facades\DB; 

class AssignModuleController extends Controller
{

    public function assignmodule(Request $request)
    {
        $school = $request->input('school');
        $sessionID = $request->input('session'); 

        $academicYear = Master_session::find($sessionID);
        
        $modules = Mastermodule::all();
        // $modules = DB::table('master_modules')->get();
        $school = User::find($school);
        

        return view('admin.assign_module.index', compact('modules','school','academicYear'));
    }

    public function assingstore(Request $request)
{
    $validated = $request->validate([
        'modules' => 'required|array',
        'modules.*' => 'exists:master_modules,id',
    ]);

    $schoolId = $request->input('school_id');
    $academicYear =  $request->input('session'); 

    foreach ($validated['modules'] as $moduleId) {
        AssignModule::firstOrCreate(
            [
                'school_id' => $schoolId,
                'module_id' => $moduleId,
                'session' => $academicYear,
            ],
            [
                'status' => 1,
            ]
        );
    }
    return redirect()->route('configuration.index', [
        'school' => $schoolId,
        'session' => $academicYear
    ])->with('success', 'Modules assigned successfully!');
    
}

}

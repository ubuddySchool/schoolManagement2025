<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;

class AssignSchoolcontroller extends Controller
{
    public function index(){
        $users = User::all();  // Get all users
        $admins = Admin::all(); 
        return view('admin.assign_school.index',compact('users','admins'));
    }

    public function assignAdmin(Request $request)
    {
        $request->validate([
            'school_id' => 'required|exists:users,id',
            'admin_id' => 'required|exists:admins,id',
        ]);
    
        $school = User::findOrFail($request->school_id);
        $school->subadmin_id = $request->admin_id;
        $school->save();
    
        return redirect()->back()->with('success', 'Admin assigned successfully.');
    }
    

}

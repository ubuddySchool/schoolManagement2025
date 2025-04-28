<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ConfigurationAdminController extends Controller
{
    public function main()
{
    $admin = Admin::where('role', 0)->get();
    return view('admin.admin_configuration.index', compact('admin'));
}

    public function addNewAdmin()
    {
        return view('admin.admin_configuration.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'gender' => 'required|in:Male,Female',
        'dob' => 'nullable|date',
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'contact_number' => 'required|digits:10',
        'alternate_number' => 'nullable|digits:10',
        'username' => 'required|string|unique:admins,username',
        'email' => 'required|email|unique:admins,email',
        'password' => 'required|string|min:6',
        'remark' => 'nullable|string'
    ]);

    $imageName = null;

    if ($request->hasFile('profile_image')) {
        $image = $request->file('profile_image');
        
        $imageName = time() . '_' . $image->getClientOriginalName();
        
        $directory = public_path('uploads/adminprofile');

        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }

        $image->move($directory, $imageName); 
    }

    


    $admin = new Admin;
    $admin->name = $request->name;
    $admin->gender = $request->gender;
    $admin->dob = $request->dob ? \Carbon\Carbon::createFromFormat('d-m-Y', $request->dob)->format('Y-m-d') : null;
    $admin->profile_image = $imageName;
    $admin->contact_number = $request->contact_number;
    $admin->alternate_number = $request->alternate_number;
    $admin->username = $request->username;
    $admin->email = $request->email;
    $admin->password = Hash::make($request->password);
    $admin->remark = $request->remark;
    $admin->role = 0; 
    $admin->save();

    return redirect()->route('admin-configuration.configAdmin')->with('success', 'Admin created successfully.');
}
}

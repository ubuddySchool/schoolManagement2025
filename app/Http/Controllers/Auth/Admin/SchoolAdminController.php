<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth; 

class SchoolAdminController extends Controller
{
    public function schoolindex()
    {
        $user = User::all();
        return view('admin.school_admin.index', compact('user'));
    }
    

    public function main_dashboard()
{
    $totalUsers = User::count();
    $activeUsers = User::where('status', 1)->count();
    $inactiveUsers = User::where('status', 0)->count();

    return view('admin.dashboard', compact('totalUsers', 'activeUsers', 'inactiveUsers'));
}


    // Create method to show the form
    public function create()
    {
        return view('admin.school_admin.create');
    }
  
   

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'school_username' => 'required|string|unique:users,school_username',
        'dise_code' => 'required|string|max:50',
        'board_name' => 'required|string',
        'medium' => 'required|string',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6',
        'school_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'contact_number' => 'nullable|string|regex:/^[0-9]{10,15}$/'
    ]);

    $user = new User();
    $user->name = $request->name;
    $user->school_username = $request->school_username;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);

    $lastCode = User::max('u_code');
    $user->u_code = $lastCode ? $lastCode + 1 : 4106;
    $user->subadmin_id = Auth::user()->id;
    $user->dise_code = $request->dise_code;
    $user->school_code = $request->school_code;
    $user->board_name = $request->board_name;
    $user->medium = $request->medium;
    $user->total_student = $request->total_student;
    $user->contact_number = $request->contact_number;
    $user->address = $request->address;
    $user->city = $request->city;
    $user->state = $request->state;
    $user->pincode = $request->pincode;
    $user->locality = $request->locality;
    $user->website = $request->website;
    $user->created_by = Auth::user()->id;
    $user->status = 1; 

    if ($request->hasFile('school_image')) {
        $image = $request->file('school_image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('uploads/schools'), $imageName);
        
        $user->school_image = $imageName;
    }
    

    $user->save();

    return redirect()->back()->with('success', 'School added successfully!');
}


    // Edit method to show the form with data
    public function shows($id)
    {
        $user = User::findOrFail($id);
        // $user = User::with('school')->findOrFail($id);
        return view('admin.school_admin.shows_details', compact('user'));
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        // $user = User::with('school')->findOrFail($id);
        return view('admin.school_admin.edit', compact('user'));
    }

    // Update method to handle form submission
    public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'dise_code' => 'required|string',
        'board_name' => 'required|string',
        'medium' => 'required|string',
        'total_student' => 'required|numeric',
        'contact_number' => 'required|numeric|digits_between:10,15',
        'address' => 'required|string',
        'city' => 'required|string',
        'state' => 'required|string',
        'pincode' => 'required|string',
        'locality' => 'required|string',
        'website' => 'required|string',
        'school_username' => 'required|string|unique:users,school_username,' . $user->id,
        'school_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
        ->withErrors($validator)
        ->withInput();
    }

    // Update basic fields
    $user->name = $request->name;
    $user->email = $request->email;
    $user->school_code = $request->school_code;
    $user->dise_code = $request->dise_code;
    $user->board_name = $request->board_name;
    $user->medium = $request->medium;
    $user->total_student = $request->total_student;
    $user->contact_number = $request->contact_number;
    $user->address = $request->address;
    $user->city = $request->city;
    $user->state = $request->state;
    $user->pincode = $request->pincode;
    $user->locality = $request->locality;
    $user->website = $request->website;
    $user->school_username = $request->school_username;
    $user->updated_by = Auth::user()->id;

    // Update password if filled
    if ($request->filled('password')) {
        $user->password = bcrypt($request->password);
    }

    // Handle image upload
    if ($request->hasFile('school_image')) {
        // Delete old image if it exists
        if ($user->school_image && file_exists(public_path('uploads/schools/' . $user->school_image))) {
            unlink(public_path('uploads/schools/' . $user->school_image));
        }
    
        $image = $request->file('school_image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('uploads/schools'), $imageName);
    
        $user->school_image = $imageName;
    }
    
    $user->save();

    return redirect()->route('schooladmin.index')->with('success', 'School admin updated successfully.');
}

    // Destroy method to delete a user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('schooladmin.index')->with('success', 'Admin deleted successfully.');
    }
}

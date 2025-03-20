<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SchoolAdminController extends Controller
{
    public function schoolindex()
    {
        $user = User::all();
        return view('admin.school_admin.index', compact('user'));
    }

    // Create method to show the form
    public function create()
    {
        return view('admin.school_admin.create');
    }

    // Store method to handle form submission
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->route('school-admin.create')
                             ->withErrors($validator)
                             ->withInput();
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('schooladmin.index')->with('success', 'Admin created successfully.');
    }

    // Edit method to show the form with data
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.school_admin.edit', compact('user'));
    }

    // Update method to handle form submission
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        if ($validator->fails()) {
            return redirect()->route('school-admin.edit', $id)
                             ->withErrors($validator)
                             ->withInput();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        
        // Update password if provided
        if ($request->has('password') && $request->password != '') {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('schooladmin.index')->with('success', 'Admin updated successfully.');
    }

    // Destroy method to delete a user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('schooladmin.index')->with('success', 'Admin deleted successfully.');
    }
}

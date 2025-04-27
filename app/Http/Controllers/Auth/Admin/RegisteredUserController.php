<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;


class RegisteredUserController extends Controller
{
    public function index(): View
    {
        $admins = Admin::all();
        return view('admin.sub_admin.index',compact('admins'));
    }


    public function create()
    {
        return view('admin.sub_admin.create');
    }

    // Store a new subadmin in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 0,  // Role 0 for Subadmin
        ]);

        return redirect()->route('subadmin.index')->with('success', 'Subadmin added successfully');
    }

    // Show the form to edit an existing subadmin
    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.sub_admin.edit', compact('admin'));
    }

    // Update the subadmin information
    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $admin->password,
        ]);

        return redirect()->route('subadmin.index')->with('success', 'Subadmin updated successfully');
    }

    // Delete a subadmin
    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect()->route('subadmin.index')->with('success', 'Subadmin deleted successfully');
    }
    public function schoolindex(): View
    {
        $user = User::all();
        return view('admin.school_admin.index',compact('user'));
    }

    public function toggleStatus($id)
{
    $user = User::findOrFail($id);
    $user->status = $user->status == 1 ? 0 : 1;
    $user->save();

    return redirect()->back()->with('success', 'Status updated successfully!');
}

}

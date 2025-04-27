<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('admin.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */

     
public function store(AdminLoginRequest $request): RedirectResponse
{
    try {
        
        $request->authenticate(); 

        $remember = $request->filled('remember');

        $user = Auth::guard('admin')->user();

        if (!$user) {
            Auth::logout();

            return redirect()->route('admin.login')->withErrors([
                'authentication' => 'Authentication failed. Please try again.',
            ]);
        }

        $userFromDb = DB::table('admins')
            ->select('id', 'username','name', 'email', 'role')
            ->where('username', $user->username) 
            ->first();

        if (!$userFromDb || $userFromDb->role !== 1) {
            Auth::logout();

            return redirect()->route('admin.login')->withErrors([
                'role' => 'You do not have the required permissions to access the admin panel.',
            ]);
        }
        

        $request->session()->regenerate();

        return redirect()->intended(route('admin.dashboard', absolute: false));

    } catch (ValidationException $e) {
        return redirect()->route('admin.login')->withErrors([
            'username' => trans('auth.failed'),
        ]);
    }
}
public function configstores(AdminLoginRequest $request): RedirectResponse
{
    try {
        
        $request->authenticate(); 

        $user = Auth::guard('admin')->user();

        if (!$user) {
            Auth::logout();

            return redirect()->route('admin.login')->withErrors([
                'authentication' => 'Authentication failed. Please try again.',
            ]);
        }

        $userFromDb = DB::table('admins')
            ->select('id', 'name', 'email', 'role')
            ->where('username', $user->username)  
            ->first();

        if (!$userFromDb || $userFromDb->role !== 0) {
            Auth::logout();

            return redirect()->route('admin.login')->withErrors([
                'role' => 'You do not have the required permissions to access the admin panel.',
            ]);
        }
        

        $request->session()->regenerate();
        return redirect()->intended(default: route('config.dashboard', absolute: false));

    } catch (ValidationException $e) {
        return redirect()->route('admin.login')->withErrors([
            'username' => trans('auth.failed'),
        ]);
    }
}


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
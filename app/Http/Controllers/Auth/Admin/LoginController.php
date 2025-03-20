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
        // Attempt authentication
        $request->authenticate(); // This will call your authenticate() method

        // Ensure the user is authenticated
        $user = Auth::guard('admin')->user();

        // If the user is not authenticated or doesn't exist, handle this case
        if (!$user) {
            // Log out and redirect with an error message if the user isn't found
            Auth::logout();

            return redirect()->route('admin.login')->withErrors([
                'authentication' => 'Authentication failed. Please try again.',
            ]);
        }

        // Query the `admins` table for the user's role
        $userFromDb = DB::table('admins')
            ->select('id', 'name', 'email', 'role')
            ->where('email', $user->email) // Match email to ensure we check the right user
            ->first();

        // If the user is not found or their role is not 1 (Superadmin)
        if (!$userFromDb || $userFromDb->role !== 1) {
            // Log out the user if they are not a superadmin or not authenticated
            Auth::logout();

            // Redirect back with an error message
            return redirect()->route('admin.login')->withErrors([
                'role' => 'You do not have the required permissions to access the admin panel.',
            ]);
        }

        // Regenerate the session after successful login
        $request->session()->regenerate();

        // Redirect to the intended page (admin dashboard)
        return redirect()->intended(route('admin.dashboard', absolute: false));

    } catch (ValidationException $e) {
        // Handle validation exception if login failed
        return redirect()->route('admin.login')->withErrors([
            'email' => trans('auth.failed'),
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
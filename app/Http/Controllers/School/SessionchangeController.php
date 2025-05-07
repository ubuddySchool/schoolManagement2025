<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session as LaravelSession;

class SessionchangeController extends Controller
{
    public function change(Request $request)
{
    $request->validate([
        'session_id' => 'required|exists:master_sessions,id', 
    ]);

    // Store session ID in Laravel session
    LaravelSession::put('session_id', $request->session_id);

    return redirect()->back()->with('success', 'Session changed successfully.');
}
}

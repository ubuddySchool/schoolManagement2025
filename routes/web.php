<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
require __DIR__.'/admin-auth.php';


Route::get('clear-cache', function () {
    Artisan::call('config:clear');
   Artisan::call('route:clear');
   Artisan::call('view:clear');
   Artisan::call('migrate');
   return 'Cache cleared and migrations run!';
});


Route::get('run-migrations', function () {
Artisan::call('migrate');
return 'Migrations completed!';
});

Route::get('refresh-migrations', function () {
Artisan::call('migrate:refresh');
return 'Migrations refreshed!';
});


Route::get('run-seeders', function () {
Artisan::call('db:seed');
return 'Seeders have been run!';
});

Route::get('reset-migrations', function () {
Artisan::call('migrate:reset');
return 'Migrations have been reset!';
});

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('school.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

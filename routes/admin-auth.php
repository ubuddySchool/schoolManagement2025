<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Admin\LoginController;
use App\Http\Controllers\Auth\Admin\RegisteredUserController;

Route::prefix('admin')->middleware('auth:admin')->group(function () {

    Route::get('school/index', [RegisteredUserController::class, 'index'])->name('schooladmin.index');
    Route::post('register', [RegisteredUserController::class, 'store']);

    // Route::get('login', [LoginController::class, 'create'])->name('admin.login');
    // Route::post('login', [LoginController::class, 'store'])->name('admin.post');

});

Route::get('admin/login', [LoginController::class, 'create'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'store'])->name('admin.post');

Route::prefix('admin')->middleware('auth:admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::post('logout', [LoginController::class, 'destroy'])->name('admin.logout');

});
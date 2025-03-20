<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Admin\LoginController;
use App\Http\Controllers\Auth\Admin\RegisteredUserController;
use App\Http\Controllers\Auth\Admin\SchoolAdminController;



Route::get('admin/login', [LoginController::class, 'create'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'store'])->name('admin.post');


Route::prefix('admin')->middleware('auth:admin')->group(function () {

    Route::get('subadmin/index', [RegisteredUserController::class, 'index'])->name('subadmin.index');
    Route::get('school/index', [RegisteredUserController::class, 'schoolindex'])->name('schooladmin.index');
    Route::post('register', [RegisteredUserController::class, 'store']);
 // Route::get('login', [LoginController::class, 'create'])->name('admin.login');
    // Route::post('login', [LoginController::class, 'store'])->name('admin.post');

});

Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function() {
    Route::resource('subadmins', RegisteredUserController::class);
});

Route::prefix('admin/school-admin')->name('school-admin.')->group(function () {
    Route::get('create', [SchoolAdminController::class, 'create'])->name('create');
    Route::post('store', [SchoolAdminController::class, 'store'])->name('store');
    Route::get('edit/{id}', [SchoolAdminController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [SchoolAdminController::class, 'update'])->name('update');
    Route::delete('destroy/{id}', [SchoolAdminController::class, 'destroy'])->name('destroy');
});


Route::prefix('admin')->middleware('auth:admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::post('logout', [LoginController::class, 'destroy'])->name('admin.logout');

});
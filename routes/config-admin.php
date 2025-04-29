<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Admin\LoginController;




Route::get('/configadmin/login', function () {
    return view('auth.configuration_admin_login');
})->name('school.configurationadmin.login');

Route::post('config/admin/login', [LoginController::class, 'configstores'])->name('configadmin.post');


Route::prefix('admin')->middleware('auth:admin')->group(function () {

    Route::get('/config-dashboard', function () {
        return view('config_admins.dashboard');
    })->name('config.dashboard');

});



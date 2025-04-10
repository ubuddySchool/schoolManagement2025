<?php

use App\Http\Controllers\Auth\Admin\AssignModuleController;
use App\Http\Controllers\Auth\Admin\BasicConfigurationController;
use App\Http\Controllers\Auth\Admin\ConfigurationController;
use App\Http\Controllers\Auth\Admin\AssignSchoolcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Admin\LoginController;
use App\Http\Controllers\Auth\Admin\ModuleConfigurationController;
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

Route::prefix('admin/configuration')->name('configuration.')->group(function () {
    Route::get('index', [ConfigurationController::class, 'index'])->name('index');
    Route::get('module-configuration', [ConfigurationController::class, 'moduleconfig'])->name('moduleconfig');
});

Route::prefix('admin/school-assgin')->name('assign.school.')->group(function () {
    Route::get('index', [AssignSchoolcontroller::class, 'index'])->name('index');
});

Route::prefix('admin/assign-module')->name('assign-module.')->group(function () {
    Route::get('index', [AssignModuleController::class, 'assignModule'])->name('assignModule');
});

Route::prefix('admin/module-configuration')->name('module-configuration.')->group(function () {
    Route::get('index', [ModuleConfigurationController::class, 'moduleconfig'])->name('moduleconfig');
    Route::get('enquiry', [ModuleConfigurationController::class, 'enquiry'])->name('enquiry');
    Route::get('/registration', [ModuleConfigurationController::class, 'registration_form'])->name('registration.form');
    Route::get('/admission', [ModuleConfigurationController::class, 'admission_form'])->name('admission.form');
});

Route::prefix('admin/basic-configuration')->name('basic-configuration.')->group(function () {
    Route::get('store', [BasicConfigurationController::class, 'store'])->name('store');
    Route::get('assignClass', [BasicConfigurationController::class, 'getClass'])->name('getClass');
    Route::get('assignSection', [BasicConfigurationController::class, 'getSection'])->name('getSection');
    Route::get('assignSubject', [BasicConfigurationController::class, 'getSubject'])->name('getSubject');
    Route::get('assignTerms', [BasicConfigurationController::class, 'getTerms'])->name('getTerms');    
    Route::get('subjectToSchool', [BasicConfigurationController::class, 'subjectToSchool'])->name('subjectToSchool');
    Route::get('subjectToClass', [BasicConfigurationController::class, 'subjectToClass'])->name('subjectToClass');
    Route::get('subjectType', [BasicConfigurationController::class, 'subjectType'])->name('subjectType');
    Route::get('subjectToModule', [BasicConfigurationController::class, 'subjectToModule'])->name('subjectToModule');

});



Route::prefix('admin')->middleware('auth:admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::post('logout', [LoginController::class, 'destroy'])->name('admin.logout');

});
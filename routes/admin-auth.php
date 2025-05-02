<?php

use App\Http\Controllers\Auth\Admin\AssignModuleController;
use App\Http\Controllers\Auth\Admin\BasicConfigurationController;
use App\Http\Controllers\Auth\Admin\ConfigurationController;
use App\Http\Controllers\Auth\Admin\AssignSchoolcontroller;
use App\Http\Controllers\Auth\Admin\ConfigurationAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Admin\LoginController;
use App\Http\Controllers\Auth\Admin\ModuleConfigurationController;
use App\Http\Controllers\Auth\Admin\RegisteredUserController;
use App\Http\Controllers\Auth\Admin\SchoolAdminController;
use App\Http\Controllers\Auth\Admin\SchoolpocController;
use  App\Http\Middleware\CheckAdminRole;



Route::get('admin/login', [LoginController::class, 'create'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'store'])->name('admin.post');


    Route::prefix('admin')
    ->middleware(['auth:admin'])
    ->group(function () {

    // Route::get('subadmin/index', [RegisteredUserController::class, 'index'])->name('subadmin.index');
    Route::get('school/index', [RegisteredUserController::class, 'schoolindex'])->name('schooladmin.index');
    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::patch('/school-admin/status/{id}', [RegisteredUserController::class, 'toggleStatus'])->name('school-admin.toggleStatus');

    // Route::get('login', [LoginController::class, 'create'])->name('admin.login');
    // Route::post('login', [LoginController::class, 'store'])->name('admin.post');

});

// Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'check.admin.role'])->group(function() {
//     Route::resource('subadmins', RegisteredUserController::class);
// });

Route::prefix('admin/school-admin')->name('school-admin.') ->middleware('auth:admin')->group(function () {
    Route::get('create', [SchoolAdminController::class, 'create'])->name('create');
    Route::post('store', [SchoolAdminController::class, 'store'])->name('store');
    Route::get('showsdetails/{id}', [SchoolAdminController::class, 'shows'])->name('shows');
    Route::get('edit/{id}', [SchoolAdminController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [SchoolAdminController::class, 'update'])->name('update');
    Route::delete('destroy/{id}', [SchoolAdminController::class, 'destroy'])->name('destroy');
    Route::get('poc/{id}', [SchoolpocController::class, 'pocIndex'])->name('poc');
    Route::get('add-poc/{id}', [SchoolpocController::class, 'createpoc'])->name('pocCreate');
    Route::post('add-poc', [SchoolpocController::class, 'store'])->name('pocs.store');
    Route::get('edit-poc/{id}', [SchoolpocController::class, 'editpoc'])->name('pocedit');
    Route::put('edit-poc/{id}', [SchoolpocController::class, 'updatepoc'])->name('pocs.update');
});

Route::prefix('admin/configuration') ->middleware(['auth:admin'])->name('configuration.')->group(function () {
    Route::any('index', action: [ConfigurationController::class, 'index'])->name('index');
    Route::any('session/{id}', [ConfigurationController::class, 'session'])->name('sessionConfig');
    Route::get('module-configuration', [ConfigurationController::class, 'moduleconfig'])->name('moduleconfig');
});

Route::prefix('admin/school-assgin')->middleware(['auth:admin', 'check.admin.role'])->name('assign.school.')->group(function () {
    Route::get('index', [AssignSchoolcontroller::class, 'index'])->name('index');
    Route::post('/assign-admin', [AssignSchoolcontroller::class, 'assignAdmin'])->name('assignAdmin');

});

Route::prefix('admin/assign-module')->name('assign-module.')->group(function () {
    Route::any('index', [AssignModuleController::class, 'assignModule'])->name('assignModule');
    Route::POST('store', [AssignModuleController::class, 'assingstore'])->name('store');
});

Route::prefix('admin/admin-configuration')->name('admin-configuration.')->group(function () {
    Route::get('index', [ConfigurationAdminController::class, 'main'])->name('configAdmin');
    Route::get('create-admin', [ConfigurationAdminController::class, 'addNewAdmin'])->name('new');
    Route::post('/admin-configuration/store', [ConfigurationAdminController::class, 'store'])->name('store');
});

Route::prefix('admin/module-configuration')->name('module-configuration.')->group(function () {
    Route::get('index', [ModuleConfigurationController::class, 'moduleconfig'])->name('moduleconfig');
    Route::get('enquiry', [ModuleConfigurationController::class, 'enquiry'])->name('enquiry');
    Route::get('student-management', [ModuleConfigurationController::class, 'student_management'])->name('student_management');
    Route::get('assign-houses', [ModuleConfigurationController::class, 'assign_houses'])->name('houses');
    Route::get('result', [ModuleConfigurationController::class, 'result'])->name('result');
    Route::get('add-grade', [ModuleConfigurationController::class, 'grade'])->name('grade');
    Route::get('result-type', [ModuleConfigurationController::class, 'resultType'])->name('resultType');
    Route::get('marking-pattern', [ModuleConfigurationController::class, 'markPattern'])->name('markPattern');
    Route::get('result-layout', [ModuleConfigurationController::class, 'resultLayout'])->name('resultLayout');
    
    Route::get('attendance', [ModuleConfigurationController::class, 'markAttendance'])->name('attendance');
    Route::get('admit-card', [ModuleConfigurationController::class, 'admitCard'])->name('admitCard');
    Route::get('calender', [ModuleConfigurationController::class, 'annualCalender'])->name('annualCalender');
    Route::get('certificate', [ModuleConfigurationController::class, 'certificate'])->name('certificate');
    Route::get('fee', [ModuleConfigurationController::class, 'feeManagement'])->name('fee');
    Route::get('transportation', [ModuleConfigurationController::class, 'vehicleManagement'])->name('transportation');
    Route::get('/registration', [ModuleConfigurationController::class, 'registration_form'])->name('registration.form');
    Route::get('/admission', [ModuleConfigurationController::class, 'admission_form'])->name('admission.form');
});

Route::prefix('admin/basic-configuration')->name('basic-configuration.')->group(function () {
    Route::get('store', [BasicConfigurationController::class, 'store'])->name('store');
    Route::get('assignClass', [BasicConfigurationController::class, 'getClass'])->name('getClass');
    Route::get('assignSection', [BasicConfigurationController::class, 'getSection'])->name('getSection');
    Route::get('assignSubject', [BasicConfigurationController::class, 'getSubject'])->name('getSubject');
    Route::get('assignTerms', [BasicConfigurationController::class, 'getTerms'])->name('getTerms');
    Route::get('school-terms', [BasicConfigurationController::class, 'schoolTerms'])->name('schoolTerms');
    Route::get('class-terms', [BasicConfigurationController::class, 'classTerms'])->name('classTerms');
    Route::get('session', [BasicConfigurationController::class, 'setSession'])->name('getSession');
    Route::get('student-form', [BasicConfigurationController::class, 'setStudentForm'])->name('getStudentForm');
    Route::get('staff-form', [BasicConfigurationController::class, 'setStaffForm'])->name('getStaffForm');

    Route::get('subjectToSchool', [BasicConfigurationController::class, 'subjectToSchool'])->name('subjectToSchool');
    Route::get('subjectToClass', [BasicConfigurationController::class, 'subjectToClass'])->name('subjectToClass');
    Route::get('subjectType', [BasicConfigurationController::class, 'subjectType'])->name('subjectType');
    Route::get('subjectToModule', [BasicConfigurationController::class, 'subjectToModule'])->name('subjectToModule');

});



Route::prefix('admin')->middleware('auth:admin')->group(function () {

    // Route::get('/dashboard', function () {
    //     return view('admin.dashboard');
    // })->name('admin.dashboard');

    Route::get('dashboard', [SchoolAdminController::class, 'main_dashboard'])->name('admin.dashboard');
   

    Route::get('/config-dashboard', function () {
        return view('config_admins.dashboard');
    })->name('config.dashboard');

    Route::post('logout', [LoginController::class, 'destroy'])->name('admin.logout');

});

// });


<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\School\StudentController;
use App\Http\Controllers\School\TimetableController;
use App\Http\Controllers\School\AttendenceController;
use App\Http\Controllers\School\StudentManagment;
use App\Http\Controllers\School\SyllabusController;
use App\Http\Controllers\School\ResultController;
use App\Http\Controllers\School\AdmitController;
use App\Http\Controllers\School\ForgetpassowrdController;
use App\Http\Controllers\School\SubAdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
require __DIR__.'/admin-auth.php';
require __DIR__.'/config-admin.php';


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
})->name('school.auth.login');


Route::get('/process/forgot-password', [ForgetpassowrdController::class, 'forgot_password'])->name('school.forgot-password');


Route::get('/dashboard', function () {
    return view('school.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        // school
    Route::get('/school/student', [StudentController::class, 'index'])->name('school_student.index');
    Route::get('/school/editstudent', [StudentController::class, 'editstudent'])->name('school_student.editstudent');
    Route::get('/school/add', [StudentController::class, 'add'])->name('school_student.add');
    Route::get('/school/edit', [StudentController::class, 'edit'])->name('school_student.edit');
    Route::get('/school/show', [StudentController::class, 'show'])->name('school_student.show');
    Route::get('/student/export_stuDetails', [StudentController::class, 'export_stuDetails'])->name('school_student.export_stuDetails');
    Route::get('/school/house', [StudentController::class, 'assgin_house'])->name('school_student.assgin_house');
   
    // student
    Route::get('/student/enquiry', [StudentController::class, 'enquiry'])->name('school_student.enquiry');
    Route::get('/student/enquiry/add', [StudentController::class, 'add_enquiry'])->name('school_student.add.enquiry');
    Route::get('/student/enquiry/followup', [StudentController::class, 'follow_up'])->name('school_student.add.follow_up');
        // fees
    Route::get('/student/registration/feespaid', [StudentController::class, 'registration_feespaid'])->name('school_student.feespaid');
    Route::get('/student/Admission/feespaid', [StudentController::class, 'admission_feespaid'])->name('school_student.admission.feespaid');
    Route::get('/student/registration/feesform', [StudentController::class, 'registration_feesunpaid'])->name('school_student.feesunpaid');
    Route::get('/student/Admission/feesform', [StudentController::class, 'admission_feesunpaid'])->name('school_student.admission.feesunpaid');
    Route::get('/student/registration/form_print', [StudentController::class, 'registration_form'])->name('school_student.registration_form');
        // timetable
    Route::get('student/timetable', [TimetableController::class, 'timetable'])->name('school_student.timetable');
    Route::get('student/timetable/add', [TimetableController::class, 'add_timetable'])->name('school_student.timetable.add');
    Route::get('student/timetable/edit', [TimetableController::class, 'edit_timetable'])->name('school_student.timetable.edit');
    Route::get('student/timetable/show', [TimetableController::class, 'showTimetable'])->name('school_student.timetable.show');
    Route::get('student/manage/dates', [TimetableController::class, 'managedates'])->name('manage.dates');
    // Route::get('/timetable/manage-dates', [TimetableController::class, 'manageDates'])->name('manage.dates');
    Route::post('/timetable/save-dates', [TimetableController::class, 'saveDates'])->name('save.dates');
    Route::get('/timetable/get-data', [TimetableController::class, 'getTimetableData'])->name('timetable.data');
    // Attendence
    Route::get('/attendence/staff', [AttendenceController::class, 'staff'])->name('attendence.staff');
    Route::get('/attendence/staff/add', [AttendenceController::class, 'addstaff'])->name('attendence.add.staff');
    Route::get('/attendence/student', [AttendenceController::class, 'student'])->name('attendence.student');
    Route::get('/attendence/student/add', [AttendenceController::class, 'addstudent'])->name('attendence.add.student');
    Route::get('/attendence/holiday', [AttendenceController::class, 'holiday'])->name('attendence.holiday');
    // Student Managment
    Route::get('/Managment/subjectassign', [StudentManagment::class, 'subject_assign'])->name('managment.subject_assign');
    
    Route::get('/Managment/promote&detention', [StudentManagment::class, 'promote_detention'])->name('managment.promote_detention');
    Route::get('/Managment/termination', [StudentManagment::class, 'termination'])->name('managment.termination');
    Route::get('/Managment/assign/section', [StudentManagment::class, 'assign_section'])->name('managment.assign_section');
    // admit
    Route::get('/school/admit', [AdmitController::class, 'admit_index'])->name('student.admit');
    Route::get('/school/rollno', [AdmitController::class, 'admit_rollno'])->name('student.admit.rollno');
    Route::get('/school/layout', [AdmitController::class, 'admit_layout'])->name('student.admit.layout');
    Route::get('/school/confirmation', [AdmitController::class, 'configration'])->name('student.admit.configration');

    // result
    Route::get('/school/result', [ResultController::class, 'result'])->name('student.result');
    Route::get('/school/division', [ResultController::class, 'add_division'])->name('student.result.division');
    Route::get('/school/marksheet', [ResultController::class, 'add_marksheet'])->name('student.result.marksheet');
    Route::get('/school/view', [ResultController::class, 'view_marksheet'])->name('student.result.view');
    Route::get('/school/empty', [ResultController::class, 'empty_marksheet'])->name('student.result.empty');
    Route::get('/school/filled', [ResultController::class, 'filled_marksheet'])->name('student.result.filled');
    Route::get('/school/empty/edit', [ResultController::class, 'edit_empty_marksheet'])->name('student.result.edit.empty');
    Route::get('/school/filled/filled', [ResultController::class, 'edit_filled_marksheet'])->name('student.result.edit.filled');
    Route::get('/school/lock-result', [ResultController::class, 'lock_result'])->name('student.result.lock');
    Route::get('/school/lock-term', [ResultController::class, 'lock_term'])->name('student.result.lock_term');
    Route::get('/school/lock-class', [ResultController::class, 'lock_class'])->name('student.result.lock_class');
    Route::get('/school/lock-subject', [ResultController::class, 'lock_subject'])->name('student.result.lock_subject');
    
    // sub admin
    Route::get('/sub-admin', [SubAdminController::class, 'main'])->name('subAdmin.index');
    Route::get('/sub-admin/add', [SubAdminController::class, 'addNew'])->name('subAdmin.new');
    Route::get('/sub-admin/module-permission', [SubAdminController::class, 'permission'])->name('subAdmin.modulePermission');
    Route::get('/sub-admin/modules', [SubAdminController::class, 'moduleList'])->name('subAdmin.activeModuleList');
    

    // syllabus
    Route::get('/school/syllabus', [SyllabusController::class, 'syllabus'])->name('student.syllabus');
    Route::get('/school/syllabus/add', [SyllabusController::class, 'add_syllabus'])->name('student.add_syllabus');
    Route::get('/school/syllabus/edit', [SyllabusController::class, 'edit_syllabus'])->name('student.edit_syllabus');

});

require __DIR__.'/auth.php';

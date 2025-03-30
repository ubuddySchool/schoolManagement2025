<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\School\StudentController;
use App\Http\Controllers\School\TimetableController;
use App\Http\Controllers\School\AttendenceController;
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
        // school
    Route::get('/school/student', [StudentController::class, 'index'])->name('school_student.index');
    Route::get('/school/add', [StudentController::class, 'add'])->name('school_student.add');
    Route::get('/school/edit', [StudentController::class, 'edit'])->name('school_student.edit');
    Route::get('/school/show', [StudentController::class, 'show'])->name('school_student.show');
        // student
    Route::get('/student/enquiry', [StudentController::class, 'enquiry'])->name('school_student.enquiry');
    Route::get('/student/enquiry/add', [StudentController::class, 'add_enquiry'])->name('school_student.add.enquiry');
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
    Route::get('/attendence/holiday', [AttendenceController::class, 'holiday'])->name('attendence.holiday');

});

require __DIR__.'/auth.php';

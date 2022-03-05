<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/personal_details', [\App\Http\Controllers\StudentPersonalDetailController::class, 'index'])->name('student-personal-details');
Route::post('/student/personal/details', [\App\Http\Controllers\StudentPersonalDetailController::class, 'insert'])->name('insert_student_personal_details');

Route::get('/emergency_contact', [\App\Http\Controllers\StudentGuardianInformationController::class, 'index'])->name('student-guardian-information');
Route::post('/student/emergency/contact_details', [\App\Http\Controllers\StudentGuardianInformationController::class, 'insert'])->name('insert_student_emergency_contact_details');

Route::get('/education_history', [\App\Http\Controllers\StudentEducationHistoryController::class, 'index'])->name('student-education-history');
Route::post('student/education/history_details', [\App\Http\Controllers\StudentEducationHistoryController::class, 'insert'])->name('insert_student_educational_history_details');

Route::get('/registration', function (){
    return view('multi_form');
});

Route::get('/student_registration', [\App\Http\Controllers\StudentRegistrationController::class, 'index']);
Route::post('/save_student', [\App\Http\Controllers\StudentRegistrationController::class, 'insert'])->name('register_student');

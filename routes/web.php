<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/personal_details', [\App\Http\Controllers\StudentPersonalDetailController::class, 'index'])->name('student-personal_details');
Route::post('/student/personal/details', [\App\Http\Controllers\StudentPersonalDetailController::class, 'insert'])->name('insert_student_personal_details');

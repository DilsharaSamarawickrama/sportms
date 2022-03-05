<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', [\App\Http\Controllers\StudentRegistrationController::class, 'index']);
Route::post('/save_student', [\App\Http\Controllers\StudentRegistrationController::class, 'insert'])->name('register_student');

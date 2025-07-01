<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\OtpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\UserController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\Client\StudentController;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/account/{id}', function ($id) {
    return "Hello $id";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Combined client prefix routes
Route::prefix('client')->middleware(['auth:web', 'check_otp'])->group(function(){
    Route::resource('users', UserController::class);
    Route::resource('students', StudentController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('appointments', \App\Http\Controllers\Client\AppointmentController::class);
});

Route::resource('one-time-password', OtpController::class);

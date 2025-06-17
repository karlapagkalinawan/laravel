<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $fname = "Karla";
    return view('welcome');
});

Route::get('/profile', [ProfileController::class, 'index']);

Route:: get('/students', [StudentController::class, 'index']);
    

Route::get('/account/{id}', function ($id) {
    return "Hello $id";
});
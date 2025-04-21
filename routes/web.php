<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
use App\Http\Controllers\SignupController;

Route::get('/signup', [SignupController::class, 'showForm'])->name('signup');
Route::post('/signup', [SignupController::class, 'register']);

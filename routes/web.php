<?php

use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
});
use App\Http\Controllers\SignupController;

Route::get('/signup', [SignupController::class, 'showForm'])->name('signup');
Route::post('/signup', [SignupController::class, 'register']);
Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

// Handle login form submission
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);

// Show registration form
Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');

// Handle registration submission
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Logout route
Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');


Route::get('/home', function () {
    $user = Auth::user();
    return view('dashboard', compact('user'));
})->middleware(['auth']);


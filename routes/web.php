<?php

use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WorkController;

Route::get('/work/create', [WorkController::class, 'create'])->name('work.create');
Route::post('/work/store', [WorkController::class, 'store'])->name('work.store');

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

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
Route::get('/find-work', function () {
    return view('work-list');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/client', [DashboardController::class, 'client'])->name('dashboard.client');
});

Route::get('/dashboard/client', [DashboardController::class, 'client'])->name('dashboard.client');
Route::get('/home', function () {
    $user = Auth::user();
    return view('dashboard', compact('user'));
})->middleware(['auth']);

Route::get('/work', [WorkController::class, 'index'])->name('work.index');

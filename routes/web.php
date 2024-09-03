<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;

// Public Routes (No authentication required)
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Registration Routes (Accessible without login)
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.create');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.store');

    Route::get('/login', function () {
        return view('login');
    })->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

// Authenticated Routes (Require login)
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admission', [AdmissionController::class, 'create'])->name('admission.create');
    Route::post('/admission', [AdmissionController::class, 'store'])->name('admission.store');
});

// Logout Route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

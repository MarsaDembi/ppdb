<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserProfileController;

Route::get('/', function () {
    return view('welcome');
});

// Login
Route::get('/signin', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/signin', [AuthController::class, 'login'])->name('proses_signin');

// Registrasi
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('proses_signup');

// Get Image
Route::get('storage/images/{path}/{imageName}', [DashboardController::class, 'displayImage'])->name('getImage');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['middleware' => ['role:user']], function () {
        // User Profile
        Route::resource('/profile', UserProfileController::class)->except('create', 'store', 'show', 'edit', 'destroy');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

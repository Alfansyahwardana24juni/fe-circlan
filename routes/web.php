<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\verifyController;

// Authentication Routes


Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');

Route::get('/login', [verifyController::class, 'tampilLogin'])->name('login.tampil');
Route::post('/login/submit', [verifyController::class, 'submitLogin'])->name('login.submit');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/index', function () {
        return view('index');
    })->name('index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'tampil'])->name('profile.tampil');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('editprofile.tampil');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('editprofile.update');
});
Route::get('/social', [AuthController::class, 'tampilSocial'])->name('social.tampil');
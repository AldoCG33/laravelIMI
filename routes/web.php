<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

// Rutas para el inicio de sesión
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas para el registro de usuarios
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

//Rutas para mi Api
Route::post('/api/data',[ApiController::class,'store']);
Route::get('/api/data',[ApiController::class,'index']);


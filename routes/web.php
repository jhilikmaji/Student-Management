<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherControlle;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
// */

Route::get('/login',[AuthController::class, 'index'])->name('login');
Route::post('/login',[AuthController::class, 'login'])->name('login');

Route::middleware(['admin'])->group(function () {
    // Routes that require admin access
    Route::get('/layout',[AuthController::class, 'layout'])->name('layout');
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/students', studentController::class);
    Route::resource('/teachers', TeacherControlle::class);
    Route::get('/logout',[AuthController::class, 'logout']);
});

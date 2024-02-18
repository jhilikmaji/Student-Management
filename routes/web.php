<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


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
// Route::get('/', function () {
//     return view('login');
// });


// Route::get('/home', function () {
//     return view('home.home');
// });

// Route::resource('/login', AuthController::class);
// Route::post('/login', [AuthController::class, 'login']);

Route::get('/',[AuthController::class, 'index'])->name('login');
Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::get('/layout',[AuthController::class, 'layout'])->name('layout');
Route::resource('/students', studentController::class);
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

// Route::group(['middleware'=>'auth'], function(){
//     Route::get('layout',[AuthController::class, 'layout'])->name('layout');
// });

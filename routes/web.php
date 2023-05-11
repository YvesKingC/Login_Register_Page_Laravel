<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::view('/', 'HomePage')->name('home');
Route::view('/Login', 'LoginPage')->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::view('/Register', 'RegisterPage')->name('register');
Route::post('/Register', [UserController::class, 'register'])->name('register');

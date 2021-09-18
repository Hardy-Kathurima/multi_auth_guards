<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm']);
Route::get('/login/lecturer', [App\Http\Controllers\Auth\LoginController::class, 'showLecturerLoginForm']);
Route::get('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'showAdminRegisterForm']);
Route::get('/register/lecturer', [App\Http\Controllers\Auth\RegisterController::class, 'showLecturerRegisterForm']);

Route::post('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin']);
Route::post('/login/lecturer', [App\Http\Controllers\Auth\LoginController::class, 'lecturerLogin']);
Route::post('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'createAdmin']);
Route::post('/register/lecturer', [App\Http\Controllers\Auth\RegisterController::class, 'createLecturer']);

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/lecturer', 'lecturer');

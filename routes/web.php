<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('googleredirectdashboard', function () {
    return view('dashboard');
});
Route::get('/', function () {  
    return view('googleAuth');  
});  

Route::get('auth/google', [AuthController::class,"redirectToGoogle"]);  
Route::get('google/callback', [AuthController::class,"handleGoogleCallback"]);  
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::get('register', [RegisterController::class, 'index'])->name('register');

Route::get('errorpage', [LoginController::class, 'errorpage'])->name('errorpage');
///email verification
Route::get('account/verify/{token}', [RegisterController::class, 'verifyAccount'])->name('user.verify');

Route::middleware('auth','is_verify_email')->group(function () {
    Route::get('dashboard', function () {
    return view('dashboard');
});

});

   
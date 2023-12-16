<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotController;
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
Route::get('/', function () {
    return view('home');
});

Route::get('/signup', function () {
   return view('register');
});

Route::post('/signup', [AuthController::class, 'signup']);

Route::get('/login', function () {
   return view('/login');
});

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/forgot-password', function () {
   return view('forgot-password');
})->name('forget.password');

Route::post('/forgot-password', [ForgotController::class, 'forgotPassword']);

Route::get('/reset-password/{token}', [ForgotController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('/reset-password', [ForgotController::class, 'resetPassword'])->name('reset.password.post');

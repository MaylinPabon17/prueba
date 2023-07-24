<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;


Route::get('dashboard',[CustomAuthController::class, 'dashboard']);
Route::get('login',[CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login',[CustomAuthController::class, 'custom-login'])->name('login-custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration',[CustomAuthController::class, 'custom-registration'])->name('registration-custom');
Route::get('signout', [CustomAuthController::class, 'signout'])->name('signout');


Route::get('/', function () {
    return view('welcome');
});

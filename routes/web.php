<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;


Route::get('dashboard',[CustomAuthController::class, 'dashboard']);
Route::get('login',[CustomAuthController::class, 'index'])->name('login');
Route::post('customLogin',[CustomAuthController::class, 'customLogin'])->name('login-custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('customRegistration',[CustomAuthController::class, 'customRegistration'])->name('register-custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::get('/', function () {
    return view('welcome');
});

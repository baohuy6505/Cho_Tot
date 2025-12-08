<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
Route::view('/', 'client.home')->name('home');
// check tk 
Route::middleware('guest')->group(function () {
    // đăng nhập
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    // ktra tk tồn tại chưa
    Route::post('/login/check', [AuthController::class, 'checkAccount'])->name('login.check');
    // đăng ký
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::view('/', 'admin.homeAdmin')->name('admin.home');
});

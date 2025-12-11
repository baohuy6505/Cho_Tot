<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::view('/', 'client.home')->name('home');

Route::middleware('guest')->group(function () {

    // Hiển thị form nhập email/số điện thoại
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

    // Xử lý đăng nhập (nhập mật khẩu)
    Route::post('/login', [AuthController::class, 'login']);

    // Kiểm tra tài khoản có tồn tại chưa
    Route::post('/login/check', [AuthController::class, 'checkAccount'])->name('login.check');

    // Hiển thị form đăng ký
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

    // Xử lý đăng ký
    Route::post('/register', [AuthController::class, 'register']);
});


Route::middleware('auth')->group(function () {

    // 
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {

        Route::view('/', 'admin.homeAdmin')->name('admin.home');
    });

    // Test session
Route::get('/test-session', function () {
    session(['name' => 'Duong']);
    return 'Saved!';
});

Route::get('/get-session', function () {
    return session('name');
});

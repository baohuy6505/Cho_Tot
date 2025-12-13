<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\AuthController;
use App\Http\Controllers\client\PostController ;

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
// Client routes
Route::get('/posts', [PostController::class, 'index'])->name('client.posts.list');
Route::get('/posts/detail/{slug}', [PostController::class, 'detail']) -> name('client.posts.detail');
Route::get('/posts/create', [PostController::class, 'createUserPost'])->name('client.posts.create');
Route::post('/posts/store', [PostController::class, 'storeUserPost'])->name('client.posts.store');
Route::get('/posts/edit/{id}', [PostController::class, 'editUserPost'])->name('client.posts.edit');
Route::post('/posts/update/{id}', [PostController::class, 'updateUserPost'])->name('client.posts.update');
Route::post('/posts/delete/{id}', [PostController::class, 'deletePost'])->name('client.posts.delete');

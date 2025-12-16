<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\client\AuthController;
use App\Http\Controllers\client\PostController;
use App\Http\Controllers\client\CommentController;

// ==========================================
// 1. PUBLIC ROUTES (Ai cũng xem được)
// ==========================================

Route::view('/', 'client.home')->name('home');

// Xem danh sách và chi tiết bài viết thì không cần đăng nhập
Route::get('/posts', [PostController::class, 'index'])->name('client.posts.list');
Route::get('/posts/detail/{slug}', [PostController::class, 'detail'])->name('client.posts.detail');

// Route test session (Xóa sau khi hoàn thành dự án)
Route::get('/test-session', function () {
    session(['name' => 'Duong']);
    return 'Saved!';
});
Route::get('/get-session', function () {
    return session('name');
});


// ==========================================
// 2. GUEST ROUTES (Chưa đăng nhập mới vào được)
// ==========================================
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/login/check', [AuthController::class, 'checkAccount'])->name('login.check');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/auth/google/redirect',[AuthController::class, 'redirectWithGoogle'])->name('google.redirect');
    Route::get('/auth/google/callback',[AuthController::class, 'loginWithGoogle'])->name('google.callback');
});


// ==========================================
// 3. AUTH ROUTES (Phải đăng nhập mới làm được)
// ==========================================
Route::middleware('auth')->group(function () {
    
    // --- Authentication ---
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // --- Comment Chức năng ---
    Route::post('/posts/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');

    // --- Post Chức năng (Thêm/Sửa/Xóa) ---
    // Đưa vào đây để bảo mật, người lạ không vào được
    Route::get('/posts/create', [PostController::class, 'createUserPost'])->name('client.posts.create');
    Route::post('/posts/store', [PostController::class, 'storeUserPost'])->name('client.posts.store');
    Route::get('/posts/edit/{id}', [PostController::class, 'editUserPost'])->name('client.posts.edit');
    Route::post('/posts/update/{id}', [PostController::class, 'updateUserPost'])->name('client.posts.update');
    Route::delete('/posts/delete/{id}', [PostController::class, 'deletePost'])->name('client.posts.delete');
});

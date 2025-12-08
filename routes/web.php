<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// trang chủ
Route::get('/', function () {
    return view('client.home'); 
})->name('home');
// middleware
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login/check', [AuthController::class, 'checkAccount'])->name('login.check');
    Route::get('/login/check', function() {
        return redirect()->route('login');
    });
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', function () {
        return view('admin.homeAdmin'); 
    })->name('admin.home');
});
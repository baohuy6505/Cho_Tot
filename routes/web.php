<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;        
use App\Http\Controllers\CommentController; 

Route::middleware(['auth'])->group(function () {
    Route::post('/posts/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
});

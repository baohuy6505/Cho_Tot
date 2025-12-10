<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\PostController ;
// Client routes
Route::get('/posts', [PostController::class, 'index'])->name('client.posts.list');
Route::get('/posts/detail/{slug}', [PostController::class, 'detail']) -> name('client.posts.detail');
Route::get('/posts/create', [PostController::class, 'createUserPost'])->name('client.posts.create');
Route::post('/posts/store', [PostController::class, 'storeUserPost']);
Route::get('/posts/edit/{id}', [PostController::class, 'editUserPost'])->name('client.posts.edit');
Route::post('/posts/update/{id}', [PostController::class, 'updateUserPost']);
Route::post('/posts/delete/{id}', [PostController::class, 'deletePost'])->name('client.posts.delete');

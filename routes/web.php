<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\PostController ;
// Client routes
Route::get('/posts/create', [PostController::class, 'createUserPost'])->name('client.posts.create');
Route::post('/posts/store', [PostController::class, 'storeUserPost']);
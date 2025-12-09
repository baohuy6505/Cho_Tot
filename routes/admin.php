<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\PostController;

//ADMIN ROUTES POSTS
Route::get('/posts', [PostController::class, 'listPosts'])->name('posts.list');


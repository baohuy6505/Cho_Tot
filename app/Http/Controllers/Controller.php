<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use App\Models\User;
use App\Models\Post;
use Illuminate\View\View;

abstract class Controller
{
    public function createUserPost(){
        return View('posts.createUserPost');
    }
}

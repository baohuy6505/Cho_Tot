<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $dataPost = Post::with('images')->orderBy('created_at','desc')->limit(20)->get();
        return View('client.home',compact('dataPost'));
        //    return response()->json([
        //     'message' => 'Post created successfully!',
        //     'data' => $dataPost,
        // ]);
    }
}

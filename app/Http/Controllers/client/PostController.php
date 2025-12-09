<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\PostImage;

class PostController extends Controller
{
    public function createUserPost() {
        return view('client.posts.createUserPost');
    }
    public function storeUserPost(StorePostRequest $request) {
        $dataValidated = $request->validated();
        $post = Post::create($dataValidated);
        // return response()->json([
        //     'message' => 'Post created successfully!',
        //     'data' => $dataValidated
        // ]);

        if($request->hasFile('images')){
            foreach($request -> file('images') as $image){
                $imagePath = $image->store('post_images', 'public');
                // PostImage::create([
                //     'post_id' => $post->id, 
                //     'image_url' => '/storage/' . $imagePath
                // ]);
            }
        }
        return redirect()->route('client.posts.create')->with('success', 'Tạo bài đăng thành công!');
    }

    public function editUserPost($id){
        $datdaPost = Post::findOrFail($id);
        return view('client.posts.editUserPost', compact('datdaPost'));
    }
    public function updateUserPost(StorePostRequest $request, $id){
        $dataValidated = $request->validated();
        $post = Post::findOrFail($id);
        $post->update($dataValidated);
        return redirect()->route('client.posts.edit', $id)->with('success', 'Cập nhật bài đăng thành công!');
    }

    public function deletePost($id){
        $dataPost = Post::findOrFail($id);
        $dataPost->delete();
        return redirect()->route('client.posts.create')->with('success', 'Xóa bài đăng thành công!');
    }
}

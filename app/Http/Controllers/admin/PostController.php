<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\PostImage;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function listPosts()
    {
        $dataPosts = Post::all();
        return view('admin.posts.listPosts', $dataPosts);
    }

    public function detailPost($id){
        $dataPost = Post::with('images') -> findOrFail($id);
        return view('admin.posts.detail',compact('dataPost'));
    }

    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        $images = PostImage::where('post_id', $id)->get();

        foreach ($images as $img) {
            $relative = preg_replace('#^/storage/#', '', $img->image_url);
            $relative = ltrim($relative, '/');

            if (Storage::disk('public')->exists($relative)) {
                Storage::disk('public')->delete($relative);
            } else {
                $full = storage_path('app/public/' . $relative);
                if (file_exists($full)) {
                    @unlink($full);
                }
            }
            $img->delete();
        }
        $post->delete();
        return redirect()->route('client.posts.list')->with('success', 'Xóa bài đăng thành công!');
    }
}

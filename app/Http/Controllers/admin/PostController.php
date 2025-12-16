<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function listPosts(Request $request)
    {
        $totalPosts   = Post::where('status', '!=', 'blocked')->count();
        $pendingPosts = Post::where('status', 'pending')->count();
        $activePosts  = Post::where('status', 'active')->count();

        // 2. TẠO QUERY CHO DANH SÁCH HIỂN THỊ
        $query = Post::with('images')
            ->where('status', '!=', 'blocked')
            ->latest();

        //nếu trên url có ?status=pending hoặc ?status=active thì thêm điều kiện where
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        //paginate(10) thay vì ->get() nếu muốn phân trang
        $dataPosts = $query->paginate(10); 

        return view('admin.posts.index', compact(
            'dataPosts',
            'totalPosts',
            'pendingPosts',
            'activePosts'
        ));
    }

    // ... Các hàm detailPost, updatePost, deletePost giữ nguyên ...
    public function detailPost($id)
    {
        $dataPost = Post::with('images')->findOrFail($id);
        return view('admin.posts.detail', compact('dataPost'));
    }

    public function updatePost(Request $request, $id)
    {
        $dataPost = Post::findOrFail($id);

        if ($request->filled('status')) {
            $dataPost->status = $request->status;
            $dataPost->save();
        }

        return redirect()->back()->with('success', 'Trạng thái bài đăng đã được cập nhật!');
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

        return redirect()->route('admin.posts.list')
            ->with('success', 'Xóa bài đăng thành công!');
    }
}
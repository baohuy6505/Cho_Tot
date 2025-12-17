<?php

namespace App\Http\Controllers\client;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $idUser = Auth::user()->id;
        $perPage = 10;
        $baseQuery = Post::where('user_id', $idUser);
        $blockedPosts = (clone $baseQuery)
            ->where('status', 'blocked')
            ->latest()
            ->paginate($perPage, ['*'], 'blocked_page');

        $pendingPosts = (clone $baseQuery)
            ->where('status', 'pending')
            ->latest()
            ->paginate($perPage, ['*'], 'pending_page');

        $activePosts = (clone $baseQuery)
            ->where('status', 'active')
            ->latest()
            ->paginate($perPage, ['*'], 'active_page');
        return View('client.posts.index', compact('activePosts', 'pendingPosts',));
    }

    public function detail($slug)
    {
        //$dataPost = Post::findOrFail($id);
        //$dataImages = PostImage::where('post_id', $id)->get();//lấy ra tat ca gia tri co post_id = $id
        
        $dataPost = Post::with('images')->where('slug', $slug)->firstOrFail();
        return view('client.posts.details', compact('dataPost'));
        // return response()->json([
        //     'message' => 'Post created successfully!',
        //     'dataSlug' => $dataPost,
        // ]);
    }
    public function createUserPost()
    {
        $categories = Category::all();
        return view('client.posts.create', compact('categories'));
    }
    public function storeUserPost(StorePostRequest $request)
    {

        $dataValidated = $request->validated();
        $dataValidated['user_id'] =  Auth::id();
        $dataValidated['status'] = 'pending';
        $slug = Str::slug($dataValidated['title']);
        $originalSlug = $slug;
        $count = 1;

        $imagePaths = [];
        while (Post::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }
        $dataValidated['slug'] = $slug;
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->getClientOriginalName();
            }
        }
        $post = Post::create($dataValidated);
        // return response()->json([
        //     'message' => 'Post created successfully!',
        //     'data' => $dataValidated,
        // ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('post_images', 'public');
                PostImage::create([
                    'post_id' => $post->id,
                    'image_url' => '/storage/' . $imagePath
                ]);
            }
        }
        return redirect()->route('client.posts.create')->with('success', 'Tạo bài đăng thành công!');
    }

    public function editUserPost($id)
    {
        $datdaPost = Post::findOrFail($id);
        
        $categories = Category::all();  

        return view('client.posts.edit', compact('datdaPost', 'categories'));
    }
    public function updateUserPost(StorePostRequest $request, $id)
    {
        $dataValidated = $request->validated();
        // return response()->json([
        //     'message' => 'Post created successfully!',
        //     'data' => $dataValidated,
        // ]);
        $post = Post::findOrFail($id);
        if ($request->hasFile('images')) {
            // Xóa hình ảnh cũ
            $oldImages = PostImage::where('post_id', $id)->get();
            foreach ($oldImages as $img) {
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

            // Lưu hình ảnh mới
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('post_images', 'public');
                PostImage::create([
                    'post_id' => $post->id,
                    'image_url' => '/storage/' . $imagePath
                ]);
            }
        }
        $post->update($dataValidated);
        return redirect()->route('client.posts.list')->with('success', 'Cập nhật bài đăng thành công!');
    }


    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        $images = PostImage::where('post_id', $id)->get();

        foreach ($images as $img) {
            // 1) Lấy relative path cho disk 'public'
            $relative = preg_replace('#^/storage/#', '', $img->image_url);
            $relative = ltrim($relative, '/');

            // 2) Xóa bằng Storage::disk('public') => chuẩn Laravel
            if (Storage::disk('public')->exists($relative)) {
                Storage::disk('public')->delete($relative);
            } else {
                // Fallback: xóa trực tiếp bằng đường dẫn đầy đủ (nếu disk ko tìm ra)
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

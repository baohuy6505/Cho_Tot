<?php
namespace App\Http\Controllers\client; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
   // chức năng thả tim bỏ tim 
    public function toggle($id)
    {
        $user = Auth::user();
        $post = Post::findOrFail($id);

        // Hàm toggle() của Laravel sẽ tự động
        // - Nếu chưa có -> Thêm vào (Like)
        // - Nếu có rồi -> Xóa đi (Unlike)
        $user->favorites()->toggle($post->id);

        return redirect()->back()->with('success', 'Đã cập nhật danh sách yêu thích!');
    }

    // xem danh sách tim đã lưu
    public function index()
    {
        $user = Auth::user();
// lấy ds post mà user đã tim
        // Eager loading 'category' và 'images' để hiển thị cho đẹp mà không bị chậm
        $favoritePosts = $user->favorites()
                              ->with(['category', 'images']) 
                              ->orderBy('pivot_created_at', 'desc') // desc hoặc asc tùy Huy muốn 
                              ->paginate(10);

        return view('client.favorites.index', compact('favoritePosts'));
    }
}
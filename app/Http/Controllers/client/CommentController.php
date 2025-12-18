<?php
namespace App\Http\Controllers\client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {

      
        //validate input data
        $request->validate([
            'content' => 'required|string|max:1000', //max = 1000 text
            'parent_id' => 'nullable|exists:comments,id' // where id = yes, null dont 
        ]);

        // check post active 
        $post = Post::findOrFail($postId);
        if ($post->status !== 'active') {
             return back()->with('error', 'Tin đăng này không còn hoạt động.');
        }

        // create comment 
        Comment::create([
            'user_id' => Auth::id(), //ạuth id 
            'post_id' => $postId,
            'parent_id' => $request->parent_id,
            'content' => $request->input('content'),
        ]);

        return back()->with('success', 'Đã đăng bình luận thành công!');
    }
    
    // delete comment = admin or human up post 
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        
        // Gate/Policy check
        if (Auth::id() !== $comment->user_id && Auth::user()->role !== 'admin') {
            abort(403, 'Bạn không có quyền xóa bình luận này');
        }

        $comment->delete();

        return back()->with('success', 'Đã xóa bình luận.');
    }
}
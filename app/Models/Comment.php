<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'post_id', 'parent_id', 'content'];

    // comment where user ?
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // comment where post ?
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // qh đệ quy : post tất cả comment trong post
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
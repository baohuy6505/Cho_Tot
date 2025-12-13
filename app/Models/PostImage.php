<?php

namespace App\Models;
use App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    protected $fillable = ['post_id','image_url'];

    public function post() {
        return $this->belongsTo(Post::class);
    }
}


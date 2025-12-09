<?php

namespace App\Models;
use App\Models\User;
use App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['reporter_id','post_id','reason','status'];

    public function reporter() {
        return $this->belongsTo(User::class, 'reporter_id');
    }

    public function post() {
        return $this->belongsTo(Post::class);
    }
}


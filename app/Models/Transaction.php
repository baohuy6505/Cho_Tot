<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;

class Transaction extends Model
{
    protected $fillable = [
        'buyer_id','seller_id','post_id'
    ];

    public function buyer() {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function seller() {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function post() {
        return $this->belongsTo(Post::class);
    }
}


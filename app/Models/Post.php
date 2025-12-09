<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
use App\Models\PostImage;
use App\Models\Favorite;
use App\Models\Report;

class Post extends Model
{
    protected $fillable = [
        'user_id','category_id','title','description','price','address','status'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function images() {
        return $this->hasMany(PostImage::class);
    }

    public function favorites() {
        return $this->hasMany(Favorite::class);
    }

    public function reports() {
        return $this->hasMany(Report::class);
    }
}


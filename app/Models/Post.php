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
        'user_id','category_id','title','slug','description','price','address','status'
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
    // khi người yêu thích tin này thì nó sẽ trả về danh sách user đã yêu thích
   public function favoritedBy() {
        return $this->belongsToMany(User::class, 'favorites', 'post_id', 'user_id')->withTimestamps();
    }

    public function reports() {
        return $this->hasMany(Report::class);
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role',
        'reputation',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password'          => 'hashed',
    ];


    //qh post 
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // sp yeu thích 
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

   

    // gd khi user là ng mua
    public function buyerTransactions()
    {
        return $this->hasMany(Transaction::class, 'buyer_id');
    }

    // gd khi user là ng bán 
    public function sellerTransactions()
    {
        return $this->hasMany(Transaction::class, 'seller_id');
    }

    // cmt
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

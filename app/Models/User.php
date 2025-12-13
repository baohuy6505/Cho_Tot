<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name','email','password','phone','role','reputation'
    ];

    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function favorites() {
        return $this->hasMany(Favorite::class);
    }

    public function reports() {
        return $this->hasMany(Report::class, 'reporter_id');
    }

    public function buyerTransactions() {
        return $this->hasMany(Transaction::class, 'buyer_id');
    }

    public function sellerTransactions() {
        return $this->hasMany(Transaction::class, 'seller_id');
    }
}

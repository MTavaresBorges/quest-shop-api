<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name',
        'age_recommendation',
        'price',
        'stock',
        'description',
    ];

    public function wishlistedByUsers()
    {
        return $this->belongsToMany(User::class, 'wishlists')->withTimestamps();
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function platforms()
    {
        return $this->belongsToMany(Platform::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'game_user')->withTimestamps();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'total_price',
        'amount',
        'status',
        'payment_method'
    ];

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

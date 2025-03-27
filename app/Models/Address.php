<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id', 
        'street', 
        'complement', 
        'number', 
        'neighborhood', 
        'city', 
        'state_id', 
        'cep'
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}

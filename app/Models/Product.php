<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'model',
        'price',
        'color_id',
    ];

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function userCarts()
    {
        return $this->hasMany(UserCart::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}

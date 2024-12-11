<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'baseprice'];

    protected function sales()
    {
        return $this->hasMany(Sale::class);
    }

    protected function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected function order()
    {
        return $this->hasMany(Order::class);
    }

    protected function cart()
    {
        return $this->hasMany(Cart::class);
    }
}

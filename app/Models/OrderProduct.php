<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    protected $fillable = ['quantity', 'price'];
    public $table = 'orders_products';
    public $timestamps = false;


    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function order()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    protected function product()
    {
        return $this->hasMany(Product::class);
    }

    protected function user()
    {
        return $this->belongsTo(User::class);
    }
}

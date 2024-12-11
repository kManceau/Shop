<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'amount', 'start', 'end'];
    public $timestamps = false;

    protected function product()
    {
        return $this->hasMany(Product::class);
    }
}

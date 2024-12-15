<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 10; $i++){
            Cart::factory()->create([
                'quantity' => rand(1, 15),
                'product_id' => rand(1, Product::count()),
                'user_id' => rand(1, User::count()),
                'price' => 15,
            ]);
        }
    }
}

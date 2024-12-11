<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        for ($i = 0; $i < 3; $i++) {
            foreach ($products as $product) {
                Review::factory()->create([
                    'product_id' => $product->id,
                    'user_id' => rand(1, rand(1, User::count())),
                    'rating' => rand(1, 5),
                ]);
            }
        }
    }
}

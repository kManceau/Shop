<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        foreach ($products as $product) {
            $product->sales()->attach(rand(1, Sale::count()));
        }
    }
}

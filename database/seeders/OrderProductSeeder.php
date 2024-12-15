<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderProduct;
use Illuminate\Database\Seeder;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all orders
        $orders = Order::all();

        // Attach products to orders
        foreach ($orders as $order) {
            $products = Product::inRandomOrder()->take(rand(1, 5))->get();
            foreach ($products as $product) {
                $price = $product->baseprice;
                if($product->sales()->sum('amount') !== 0){
                    $price = $price * ($product->sales()->sum('amount') / 100);
                }
                OrderProduct::factory()->create([
                    'quantity' => rand(1, 10),
                    'price' => $price,
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                ]);
            }
        }
    }
}

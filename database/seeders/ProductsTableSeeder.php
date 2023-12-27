<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 15 products
        for ($i = 1; $i <= 15; $i++) {
            Product::create([
                'name' => 'Product ' . $i,
                'price' => rand(10, 1000), // Random price between 10 and 1000 (modify as needed)
                'image' => 'product' . $i . '.jpg', // You might need to adjust image names or paths
                'status' => 'available',
            ]);
        }
    }
}

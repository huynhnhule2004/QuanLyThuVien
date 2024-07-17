<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop dell xs',
            'price' => 30000000,
            'description' => 'Laptop dengan spesifikasi yang bagus',
            'category_id' =>
            Category::where('name', 'Laptop')->first()->id
        ]);
    }
}

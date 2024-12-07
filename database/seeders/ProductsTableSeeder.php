<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run(): void
    {
        // Contoh menambahkan satu data produk
        Product::create([
            'name' => 'Tanaman Hias',
            'description' => 'Tanaman hias cantik untuk dekorasi rumah.',
            'price' => 50000,
            'stock' => 20,
            'category_id' => 1,
            'image' => 'tanaman_hias.jpg',
        ]);

        // Contoh menambahkan data menggunakan factory
        Product::factory()->count(10)->create();
    }
}

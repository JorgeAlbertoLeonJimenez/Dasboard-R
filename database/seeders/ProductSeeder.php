<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            product::create([
                'name' => 'Producto ' . ($i + 1),
                'price' => rand(100, 10000) / 100, 
                'description' => 'Descripción del Producto ' . ($i + 1)
            ]);
        };
}
}
<?php

namespace Database\Seeders;

use App\Models\Category;
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
      // Producto 1: Coca-Cola
$product1 = new Product();
$product1->name = 'Coca-Cola';
$product1->price = 12;
$product1->description = 'Refresco de cola carbonatado.';
$product1->category_id = 1; // Bebidas
$product1->save();

// Producto 2: Pepsi
$product2 = new Product();
$product2->name = 'Pepsi';
$product2->price = 10;
$product2->description = 'Refresco de cola con sabor a cola.';
$product2->category_id = 1; // Bebidas
$product2->save();

// Producto 3: Fanta
$product3 = new Product();
$product3->name = 'Fanta';
$product3->price = 8;
$product3->description = 'Refresco de naranja carbonatado.';
$product3->category_id = 1; // Bebidas
$product3->save();

// Producto 4: Sprite
$product4 = new Product();
$product4->name = 'Sprite';
$product4->price = 10;
$product4->description = 'Refresco de lima-limón carbonatado.';
$product4->category_id = 1; // Bebidas
$product4->save();

// Producto 5: Agua
$product5 = new Product();
$product5->name = 'Agua';
$product5->price = 5;
$product5->description = 'Agua purificada embotellada.';
$product5->category_id = 1; // Agua
$product5->save();

// Producto 6: Hamburguesa
$product6 = new Product();
$product6->name = 'Hamburguesa con queso';
$product6->price = 15;
$product6->description = 'Hamburguesa clásica con queso y verduras.';
$product6->category_id = 3; // Comida rápida (hamburguesas)
$product6->save();

// Producto 7: Hamburguesa de pollo
$product7 = new Product();
$product7->name = 'Hamburguesa de pollo';
$product7->price = 12;
$product7->description = 'Hamburguesa de pollo crujiente con salsa especial.';
$product7->category_id = 3; // Comida rápida (hamburguesas)
$product7->save();

// Producto 8: Manzana
$product8 = new Product();
$product8->name = 'Manzana';
$product8->price = 2;
$product8->description = 'Fruta fresca y jugosa.';
$product8->category_id = 2; // Frutas
$product8->save();

// Producto 9: Naranja
$product9 = new Product();
$product9->name = 'Naranja';
$product9->price = 1.5;
$product9->description = 'Cítrico jugoso y refrescante.';
$product9->category_id = 2; // Frutas
$product9->save();

// Producto 10: Plátano
$product10 = new Product();
$product10->name = 'Plátano';
$product10->price = 1;
$product10->description = 'Fruta tropical dulce y nutritiva.';
$product10->category_id = 2; // Frutas
$product10->save();

        
      
  
    }
}
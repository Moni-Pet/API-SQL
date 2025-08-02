<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Croquetas para perro adulto',
                'price' => 299.99,
                'stock' => 50,
                'discount' => 20.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shampoo antiséptico para perros',
                'price' => 89.50,
                'stock' => 35,
                'discount' => 0.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pelota de goma con sonido',
                'price' => 45.00,
                'stock' => 75,
                'discount' => 5.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Collar ajustable café',
                'price' => 60.00,
                'stock' => 40,
                'discount' => 0.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Snacks de pollo para entrenamiento',
                'price' => 55.50,
                'stock' => 65,
                'discount' => 10.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

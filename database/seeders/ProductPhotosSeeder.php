<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductPhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('product_photos')->insert([
            [
                'product_id' => 1,
                'photo_link' => 'https://monipetresources.sfo3.digitaloceanspaces.com/products/croquetas_para_perro_adulto_688adb8ef089b.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2,
                'photo_link' => 'https://monipetresources.sfo3.digitaloceanspaces.com/products/shampoo_antis%C3%A9ptico_para_perros_688adbad5f366.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 3,
                'photo_link' => 'https://monipetresources.sfo3.digitaloceanspaces.com/products/pelota_de_goma_con_sonido_688adbb86e527.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 4,
                'photo_link' => 'https://monipetresources.sfo3.digitaloceanspaces.com/products/collar_ajustable_caf%C3%A9_688adbf58bc2d.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 5,
                'photo_link' => 'https://monipetresources.sfo3.digitaloceanspaces.com/products/snacks_de_pollo_para_entrenamiento_688adc062fad8.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

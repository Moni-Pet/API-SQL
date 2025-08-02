<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesPetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types_pet')->insert([
            [
                'type_pet' => 'Perro',
                'icono' => 'https://example.com/icons/perro.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_pet' => 'Gato',
                'icono' => 'https://example.com/icons/gato.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

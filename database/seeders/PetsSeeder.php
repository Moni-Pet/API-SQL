<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pets')->insert([
            [
                'breed_id' => 1,
                'name' => 'Max',
                'birthday' => '2020-05-10',
                'gender' => 'Macho',
                'spayed' => true,
                'size' => 'Grande',
                'weight' => 30.50,
                'height' => 60.00,
                'description' => 'Perro activo y amigable.',
                'status' => 'No adoptado',
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'breed_id' => 2,
                'name' => 'Luna',
                'birthday' => '2019-08-20',
                'gender' => 'Hembra',
                'spayed' => false,
                'size' => 'Mediano',
                'weight' => 20.00,
                'height' => 45.00,
                'description' => 'Bulldog muy tranquila.',
                'status' => 'Personal',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'breed_id' => 4,
                'name' => 'Mishi',
                'birthday' => '2021-01-15',
                'gender' => 'Hembra',
                'spayed' => true,
                'size' => 'Chico',
                'weight' => 5.30,
                'height' => 25.00,
                'description' => 'Gatita muy cariñosa.',
                'status' => 'No adoptado',
                'user_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

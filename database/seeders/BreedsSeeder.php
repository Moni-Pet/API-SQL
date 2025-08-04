<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BreedsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('breeds')->insert([
            [
                'type_pet_id' => 1,
                'breed' => 'Labrador Retriever',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_pet_id' => 1,
                'breed' => 'Bulldog',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_pet_id' => 1,
                'breed' => 'Chihuahua',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_pet_id' => 2,
                'breed' => 'Siamés',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_pet_id' => 2,
                'breed' => 'Persa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

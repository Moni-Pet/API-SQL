<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'type_service_id' => 1,
                'service' => 'Consulta general',
                'price' => 300.00,
                'discounts' => 0.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_service_id' => 1,
                'service' => 'Vacunación',
                'price' => 500.00,
                'discounts' => 50.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'type_service_id' => 2,
                'service' => 'Baño completo',
                'price' => 400.00,
                'discounts' => 0.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_service_id' => 2,
                'service' => 'Corte de pelo',
                'price' => 350.00,
                'discounts' => 30.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

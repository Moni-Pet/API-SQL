<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdoptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('adoption')->insert([
            [
                'adopter_id' => 1,
                'pet_id' => 1,
                'date' => Carbon::parse('2025-07-01'),
                'adoption_status' => 'Realiazada',
                'notes' => 'Adopción exitosa, se entregó con carnet de vacunación.',
                'delivery_date' => Carbon::parse('2025-07-04 10:00:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'adopter_id' => 1,
                'pet_id' => 2,
                'date' => Carbon::parse('2025-07-15'),
                'adoption_status' => 'En proceso',
                'notes' => null,
                'delivery_date' => Carbon::parse('2025-07-18 14:30:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdoptionFollowupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('adoption_followups')->insert([
            [
                'adoption_id' => 1,
                'follow_up_date' => Carbon::parse('2025-07-10 10:00:00'),
                'animal_condition' => 'Buenas condiciones',
                'comment' => 'El animal luce saludable y bien alimentado.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'adoption_id' => 1,
                'follow_up_date' => Carbon::parse('2025-07-20 12:00:00'),
                'animal_condition' => 'Mejor que antes',
                'comment' => 'Se nota feliz y adaptado a su nuevo hogar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'adoption_id' => 2,
                'follow_up_date' => Carbon::parse('2025-07-25 09:30:00'),
                'animal_condition' => 'Regular',
                'comment' => 'El adoptante necesita orientación sobre la alimentación.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

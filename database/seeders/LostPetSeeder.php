<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class LostPetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lost_pets')->insert([
    [
        'user_id' => 1,
        'pet_id' => 1,
        'lat' => '19.4326',
        'lon' => '-99.1332',
        'description' => 'Se perdió en el parque México, llevaba un collar rojo.',
        'user_find_id' => null,
        'lost_date' => Carbon::now()->subDays(2),
        'status' => 0,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'user_id' => 2,
        'pet_id' => 2,
        'lat' => '20.6597',
        'lon' => '-103.3496',
        'description' => 'Se escapó del patio trasero, es muy nerviosa.',
        'user_find_id' => 5,
        'lost_date' => Carbon::now()->subDays(5),
        'status' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'user_id' => 3,
        'pet_id' => 3,
        'lat' => '21.1619',
        'lon' => '-86.8515',
        'description' => 'Desapareció durante una tormenta. Última vez visto cerca de la playa.',
        'user_find_id' => null,
        'lost_date' => Carbon::now()->subDays(1),
        'status' => 0,
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);
    }
}

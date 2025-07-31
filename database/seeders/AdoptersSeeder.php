<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdoptersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('adopters')->insert([
            [
                'user_id' => 1,
                'phone' => '5512345678',
                'street' => 'Plaza mayor',
                'neighborhood' => 'Centro',
                'city_id' => 67,
                'state_id' => 8,
                'postal_code' => '01000',
                'reference' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'phone' => '5534567890',
                'street' => 'Calle Hidalgo 456',
                'neighborhood' => 'Del Valle',
                'city_id' => 207,
                'state_id' => 6,
                'postal_code' => '03100',
                'reference' => 'Cerca del hospital',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

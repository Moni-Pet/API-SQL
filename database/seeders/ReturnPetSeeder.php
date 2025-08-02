<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReturnPetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('return_pets')->insert([
            [
                'adoption_id' => 1,
                'date' => now()->subDays(10),
                'comment' => 'El perro no se adaptó al hogar.',
                'created_at' => now()->subDays(10),
                'updated_at' => now()->subDays(10),
            ]
        ]);
    }
}

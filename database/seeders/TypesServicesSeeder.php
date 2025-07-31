<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TypesServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types_services')->insert([
            [
                'type_service' => 'Médico',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_service' => 'Estética',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppointmentDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('appointment_details')->insert([
            [
                'service_id' => 3,
                'appointment_id' => 1,
                'price_service' => 400.00,
                'discount' => 0.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_id' => 2,
                'appointment_id' => 2,
                'price_service' => 500.00,
                'discount' => 50.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_id' => 4,
                'appointment_id' => 1,
                'price_service' => 350.00,
                'discount' => 30.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('appointment_pets')->insert([
            [
                'pet_id' => 2,
                'appointment_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pet_id' => 4,
                'appointment_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

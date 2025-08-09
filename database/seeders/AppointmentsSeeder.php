<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppointmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('appointments')->insert([
            [
                'user_id' => 2,
                'pet_id' => 2,
                'status' => 'Pendiente',
                'descripcion' => 'Primera consulta estética',
                'total_price' => 400.00,
                'creation_date' => now(),
                'date' => now()->addDays(5),
                'transferce_code' => null,
                'type_appointment' => 'Estetica',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'pet_id' => 2,
                'status' => 'Finalizada',
                'descripcion' => 'Vacunación anual',
                'total_price' => 500.00,
                'creation_date' => now()->subDays(10),
                'date' => now()->subDays(5),
                'transferce_code' => 'TRF123456',
                'type_appointment' => 'Medica',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'pet_id' => 1,
                'status' => 'Cancelada',
                'descripcion' => 'Cita para adopción',
                'total_price' => 0.00,
                'creation_date' => now()->subDays(2),
                'date' => now()->addDays(2),
                'transferce_code' => null,
                'type_appointment' => 'Adoptiva',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'pet_id' => null,
                'status' => 'Pendiente',
                'descripcion' => 'Cita para adopción',
                'total_price' => 0.00,
                'creation_date' => now()->subDays(2),
                'date' => now()->addDays(2),
                'transferce_code' => null,
                'type_appointment' => 'Adoptiva',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

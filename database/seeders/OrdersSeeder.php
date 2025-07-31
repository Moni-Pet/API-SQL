<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'user_id' => 2,
                'purchase_date' => Carbon::now()->subDays(3),
                'pickup_date' => Carbon::now()->addDays(3),
                'price' => 499.99,
                'status' => 'pendiente',
                'transferce_code' => 'TRF123456',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'purchase_date' => Carbon::now()->subDays(7),
                'pickup_date' => Carbon::now()->subDays(3),
                'price' => 279.50,
                'status' => 'entregado',
                'transferce_code' => 'TRF654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'purchase_date' => Carbon::now()->subDays(1),
                'pickup_date' => Carbon::now()->addDays(3),
                'price' => 350.75,
                'status' => 'cancelado',
                'transferce_code' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

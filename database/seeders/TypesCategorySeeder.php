<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TypesCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types_category')->insert([
            [
                'type_category' => 'Alimento',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_category' => 'Juguetes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_category' => 'Accesorios',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_category' => 'Ropa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_category' => 'Higiene',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

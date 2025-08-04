<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'category' => 'Croquetas',
                'type_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Snacks',
                'type_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Pelotas',
                'type_category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Shampoo',
                'type_category_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Collares',
                'type_category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Comedero',
                'type_category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'GPS',
                'type_category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesGadgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gadget_types')->insert([
            [
                'gadget_type' => 'gps',
                'photo_url' => 'https://example.com/icons/gadgets/gps.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gadget_type' => 'comedero',
                'photo_url' => 'https://example.com/icons/gadgets/comedero.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

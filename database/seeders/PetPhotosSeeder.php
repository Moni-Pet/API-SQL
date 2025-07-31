<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PetPhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pet_photos')->insert([
            [
                'pet_id' => 1,
                'photo_link' => 'https://monipetresources.sfo3.digitaloceanspaces.com/pets/max_688ad9c9a80aa.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pet_id' => 2,
                'photo_link' => 'https://monipetresources.sfo3.digitaloceanspaces.com/pets/luna_688ad9e68ae16.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pet_id' => 3,
                'photo_link' => 'https://monipetresources.sfo3.digitaloceanspaces.com/pets/mishi_688ad9f82469b.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

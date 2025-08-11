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
                'photo_link' => 'https://monipetresources.sfo3.digitaloceanspaces.com/pets/max_68983e6574fb9.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pet_id' => 2,
                'photo_link' => 'https://monipetresources.sfo3.digitaloceanspaces.com/pets/luna_68981ca0b7c8f.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pet_id' => 3,
                'photo_link' => 'https://monipetresources.sfo3.digitaloceanspaces.com/pets/mishi_6899b47536e5c.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\TypesUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typesUser = [
            ['user_type' => 1],
            ['user_type' => 2],
            ['user_type' => 3],
            ['user_type' => 4],
        ];

        DB::table('types_user')->insert($typesUser);
    }
}

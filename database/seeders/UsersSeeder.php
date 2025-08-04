<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'user_type_id' => 1, // Administrador
                'name' => 'Monipet',
                'last_name' => 'Utt',
                'last_name2' => 'Hernandez',
                'email' => 'monipet.utt@gmail.com',
                'password' => Hash::make('564822194Ifjj*'),
                'account_verification' => now(),
                'gender' => '39 tipos de gays',
                'birth_date' => '2002-03-04',
                'two_factor_code' => null,
                'two_factor_expires_at' => null,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_type_id' => 3, // Cliente
                'name' => 'Jessica',
                'last_name' => 'Juarez',
                'last_name2' => null,
                'email' => 'jljh1993@gmail.com',
                'password' => Hash::make('password12345678'),
                'account_verification' => now(),
                'gender' => 'femenino',
                'birth_date' => '2002-07-20',
                'two_factor_code' => null,
                'two_factor_expires_at' => null,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_type_id' => 2, // Trabajador
                'name' => 'Gato',
                'last_name' => 'Michi',
                'last_name2' => 'Hernandez',
                'email' => 'jafetavalos49@gmail.com',
                'password' => Hash::make('C0ntraS3gura'),
                'account_verification' => now(),
                'gender' => '39 tipos de gays',
                'birth_date' => '2002-03-04',
                'two_factor_code' => null,
                'two_factor_expires_at' => null,
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

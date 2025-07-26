<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ['state' => 'Aguascalientes'],
            ['state' => 'Baja California'],
            ['state' => 'Baja California Sur'],
            ['state' => 'Campeche'],
            ['state' => 'Chiapas'],
            ['state' => 'Chihuahua'],
            ['state' => 'Ciudad de México'],
            ['state' => 'Coahuila'],
            ['state' => 'Colima'],
            ['state' => 'Durango'],
            ['state' => 'Estado de México'],
            ['state' => 'Guanajuato'],
            ['state' => 'Guerrero'],
            ['state' => 'Hidalgo'],
            ['state' => 'Jalisco'],
            ['state' => 'Michoacán'],
            ['state' => 'Morelos'],
            ['state' => 'Nayarit'],
            ['state' => 'Nuevo León'],
            ['state' => 'Oaxaca'],
            ['state' => 'Puebla'],
            ['state' => 'Querétaro'],
            ['state' => 'Quintana Roo'],
            ['state' => 'San Luis Potosí'],
            ['state' => 'Sinaloa'],
            ['state' => 'Sonora'],
            ['state' => 'Tabasco'],
            ['state' => 'Tamaulipas'],
            ['state' => 'Tlaxcala'],
            ['state' => 'Veracruz'],
            ['state' => 'Yucatán'],
            ['state' => 'Zacatecas'],
        ];
        
        DB::table('states')->insert($states);
    }
}

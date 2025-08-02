<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Adopter;
use App\Models\Pet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            TypesUserSeeder::class,
            UsersSeeder::class,
            StatesTableSeeder::class,
            CitiesTableSeeder::class,
            TypesPetSeeder::class,
            BreedsSeeder::class,
            PetsSeeder::class,
            AdoptersSeeder::class,
            AdoptionSeeder::class,
            AdoptionFollowupsSeeder::class,
            TypesServicesSeeder::class,
            ServicesSeeder::class,
            AppointmentsSeeder::class,
            AppointmentDetailsSeeder::class,
            TypesCategorySeeder::class,
            CategoriesSeeder::class,
            ProductsSeeder::class,
            CategoriesProductSeeder::class,
            OrdersSeeder::class,
            OrderDetailsSeeder::class,
            GadgetsSeeder::class,
            ReturnPetSeeder::class,
            PetPhotosSeeder::class,
            ProductPhotosSeeder::class,
        ]);
    }
}

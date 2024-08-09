<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Plant;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Gallery;
use App\Models\SubsTier;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SubsTierSeeder::class,
            SubsCategorySeeder::class,
            AddressSeeder::class,
            UserSeeder::class,
            PlantSeeder::class,
        ]);

        Gallery::factory()->count(24)->create();
    }
}

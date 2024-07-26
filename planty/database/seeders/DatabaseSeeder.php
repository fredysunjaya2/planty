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
        // User::factory(10)->create();
        $this->call([
            SubsTierSeeder::class,
            SubsCategorySeeder::class,
            AddressSeeder::class
        ]);

        Plant::factory()->count(100)->create();
        Gallery::factory()->count(100)->create();
    }
}

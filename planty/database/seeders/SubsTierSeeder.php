<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubsTierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subs_tiers')->insert([
            [
                'tier_name' => 'Beginner',
                'slug' => 'product-beginner',
            ],
            [
                'tier_name' => 'Enthusiast',
                'slug' => 'product-enthusiast',
            ],
        ]);
    }
}

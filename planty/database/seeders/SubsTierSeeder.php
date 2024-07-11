<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubsTierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('subs_tiers')->insert([
            ['tier_name' => 'Beginner'],
            ['tier_name' => 'Enthusiast'],
        ]);
    }
}

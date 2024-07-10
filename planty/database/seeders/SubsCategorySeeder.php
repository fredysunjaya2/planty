<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('subs_categories')->insert([
            [
                'subs_tier_id' => '1',
                'months' => 1,
                'price' => 39299.00,
                'discount' => 0,
            ],
            [
                'subs_tier_id' => '1',
                'months' => 3,
                'price' => 117897.00,
                'discount' => 0.09,
            ],
            [
                'subs_tier_id' => '1',
                'months' => 6,
                'price' => 235794.00,
                'discount' => 0.16,
            ],
            [
                'subs_tier_id' => '2',
                'months' => 1,
                'price' => 79299.00,
                'discount' => 0,
            ],
            [
                'subs_tier_id' => '2',
                'months' => 3,
                'price' => 237897.00,
                'discount' => 0.09,
            ],
            [
                'subs_tier_id' => '2',
                'months' => 6,
                'price' => 475794.00,
                'discount' => 0.16,
            ],
        ]);
    }
}

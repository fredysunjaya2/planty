<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subs_categories')->insert([
            [
                'slug' => Str::of('Product Beginner 1 Month')->slug('-'),
                'subs_tier_id' => '1',
                'months' => 1,
                'price' => 39299.00,
                'discount' => 0,
            ],
            [
                'slug' => Str::of('Product Beginner 3 Months')->slug('-'),
                'subs_tier_id' => '1',
                'months' => 3,
                'price' => 117897.00,
                'discount' => 0.09,
            ],
            [
                'slug' => Str::of('Product Beginner 6 Months')->slug('-'),
                'subs_tier_id' => '1',
                'months' => 6,
                'price' => 235794.00,
                'discount' => 0.16,
            ],
            [
                'slug' => Str::of('Product Enthusiast 1 Month')->slug('-'),
                'subs_tier_id' => '2',
                'months' => 1,
                'price' => 79299.00,
                'discount' => 0,
            ],
            [
                'slug' => Str::of('Product Enthusiast 3 Months')->slug('-'),
                'subs_tier_id' => '2',
                'months' => 3,
                'price' => 237897.00,
                'discount' => 0.09,
            ],
            [
                'slug' => Str::of('Product Enthusiast 6 Months')->slug('-'),
                'subs_tier_id' => '2',
                'months' => 6,
                'price' => 475794.00,
                'discount' => 0.16,
            ],
        ]);
    }
}

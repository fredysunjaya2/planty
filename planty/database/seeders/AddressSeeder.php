<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('addresses')->insert([
            [
                'street' => 'Beginner Street',
                'number' => 212,
                'country' => 'indonesia',
                'district' => 'serpong',
                'city' => 'sentul',
                'village' => 'hiyaaa',
                'postal_code' => '21211'
            ],
        ]);
    }
}

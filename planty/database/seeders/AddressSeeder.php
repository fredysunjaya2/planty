<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('addresses')->insert([
            [
                'street_number' => 'Beginner Street, 212',
                'country' => 'indonesia',
                'district' => 'serpong',
                'city' => 'sentul',
                'village' => 'hiyaaa',
                'postal_code' => '21211'
            ],
        ]);
    }
}

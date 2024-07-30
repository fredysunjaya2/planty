<?php

namespace Database\Seeders;

use App\Models\SubsTier;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'username' => 'asd',
                'email' => 'asd@gmail.com',
                'password' => bcrypt('asdasdasd'),
                'first_name' => 'asd',
                'last_name' => 'asd',
                'phone_number' => '+6281234567890',
                'address_id' => 1,
            ],
        ]);
    }
}

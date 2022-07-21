<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role_id' => '1',
            'address' => 'Nam Dinh',
            'password' => Hash::make('admin123'),
        ]);

        DB::table('users')->insert([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'role_id' => '2',
            'address' => 'Ha Noi',
            'password' => Hash::make('customer123'),
        ]);
    }
}

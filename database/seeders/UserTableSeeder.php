<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Normal user
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'role' => 3,
                'password' => Hash::make('12345678'),
            ],
            //Admin user
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 2,
                'password' => Hash::make('12345678'),
            ],
            //Super Admin user
            [
                'name' => 'SuperAdmin',
                'email' => 'superadmin@gmail.com',
                'role' => 1,
                'password' => Hash::make('12345678'),
            ],
        ]);
    }
}

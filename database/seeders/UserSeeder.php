<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'username' => 'adminuser',
                'email' => 'admin@example.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vendor User',
                'username' => 'vendoruser',
                'email' => 'vendor@example.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@example.com',
                'role' => 'user',
                'status' => 'active',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

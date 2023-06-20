<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Alex Sili', 'email' => 'alexsili@develop.com', 'email_verified_at' => now(), 'password' => Hash::make('asdasda'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Test User', 'email' => 'testuser@develop.com', 'email_verified_at' => now(), 'password' => Hash::make('asdasda'), 'created_at' => now(), 'updated_at' => now()],
        ]);

    }
}

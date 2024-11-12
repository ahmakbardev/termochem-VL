<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'TestUser', // Change to any test username you prefer
            'name' => 'testuser@example.com', // This can be adjusted or removed if you're not using email
            'password' => Hash::make('password123'), // Change this to your test password
        ]);
    }
}

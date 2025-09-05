<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@sample.com',
            'role' => 'admin',
            'password' => bcrypt('secret'),
            'email_verified_at' => now(),
            'remember_token' => null,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create(
            [
                'name' => 'jason',
                'email' => 'jasonanorris@hotmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$12$JE4F6ZLfMR9kca8o88yBdegjvCvs5s1xtb7fp3OtbiJNwAhWc4Lv2',
                'remember_token' => Str::random(10),
            ]);
    }
}

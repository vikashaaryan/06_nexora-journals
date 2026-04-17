<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
   public function run(): void
    {
        // Normal User
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'admin_status' => 0,
        ]);

        // Admin User
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'admin_status' => 1,
        ]);
    }
}

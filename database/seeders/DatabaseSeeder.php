<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'adminmarkaz@markazdoroos.online',
            'role' => 'admin',
            'password' => bcrypt('Markaz123@'),
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@markazdoroos.online',
            'role' => 'user',
            'password' => bcrypt('User123@'),
        ]);
    }
}

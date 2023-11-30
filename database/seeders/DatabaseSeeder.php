<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name' => 'Fiction',
        ]);

        Category::create([
            'name' => 'Horor',
        ]);

        Category::create([
            'name' => 'Romance',
        ]);

        Category::create([
            'name' => 'Mistery',
        ]);

        Category::create([
            'name' => 'Fantasy',
        ]);

        Category::create([
            'name' => 'Comedy',
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
        ]);
    }
}

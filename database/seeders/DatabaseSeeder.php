<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Insert Users
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Test User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // Insert Tasks
        DB::table('tasks')->insert([
            [
                'user_id' => 1,
                'title' => 'Learn Laravel',
                'description' => 'Study Laravel MVC structure',
                'status' => 'pending',
                'priority' => 'high',
                'due_date' => '2026-03-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Build Task Manager',
                'description' => 'Create CRUD for tasks',
                'status' => 'in_progress',
                'priority' => 'medium',
                'due_date' => '2026-03-25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'title' => 'Write API documentation',
                'description' => 'Prepare API docs for project',
                'status' => 'completed',
                'priority' => 'low',
                'due_date' => '2026-03-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
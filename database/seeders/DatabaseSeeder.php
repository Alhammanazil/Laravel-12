<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create user only if it doesn't exist
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            ['name' => 'Test User']
        );

        // Create sample posts only if they don't exist
        if (Post::count() == 0) {
            Post::create([
                'title' => 'First Blog Post',
                'slug' => 'first-blog-post',
                'author' => 'John Doe',
                'date' => '2025-01-01',
                'content' => 'This is the content of the first blog post. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ]);

            Post::create([
                'title' => 'Second Blog Post',
                'slug' => 'second-blog-post',
                'author' => 'Jane Smith',
                'date' => '2025-01-02',
                'content' => 'This is the content of the second blog post. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ]);

            Post::create([
                'title' => 'Laravel Tips and Tricks',
                'slug' => 'laravel-tips-and-tricks',
                'author' => 'Developer',
                'date' => '2025-01-03',
                'content' => 'Here are some useful Laravel tips and tricks that will help you become a better developer.'
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create()->each(function($user) {
          $user->posts()->save(\App\Models\Post::factory()->make());
        });
//        \App\Models\Post::factory(100)->create();
    }
}

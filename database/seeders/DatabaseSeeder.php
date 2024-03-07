<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Post as Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(3)->create();
        Post::factory()->create([
            'title'   => 'Un título',
            'content' => 'Una frase',
            ]
        );
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Wong',
            'email' => 'wong@wong.com',
            'password' => 'password',
        ]);
    }
}

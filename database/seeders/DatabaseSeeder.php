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
        /* Fem 3 posts aleatoris amb fakers */
        Post::factory(3)->create();

        /* Un títol i una frase concretes fan un post */
        Post::factory()->create([
            'title'   => 'Un títol',
            'content' => 'Una frase pel contingut',
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

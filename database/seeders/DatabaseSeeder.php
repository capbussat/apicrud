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

        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'user1',
            'email' => 'user1@example.com',
            'password' => 'password',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'user2',
            'email' => 'user2@example.com',
            'password' => 'password',
        ]);

        /* Board */

        \App\Models\Board::factory()->create([
            'title'   => 'Board 1',
        ]);

        /* trellolist */

        \App\Models\Trellolist::factory()->create([
            'title'   => 'List 1',
            'position' => 1,
            'board_id' => 1,
        ]);

        \App\Models\Trellolist::factory()->create([
            'title'   => 'List 2',
            'position' => 2,
            'board_id' => 1,
        ]);

        \App\Models\Trellolist::factory()->create([
            'title'   => 'List 3',
            'position' => 3,
            'board_id' => 1,
        ]);

        /* Cards */
        \App\Models\Card::factory()->create([
            'title'   => 'Card 1',
            'trellolist_id' => 1,
            'position' => 1,
            'content' => 'Alguna cosa 1'
        ])->user()->attach(1); // dificil , n'hi ha diferents mètodes per belongsToMany o belongsTo
            // random
        \App\Models\Card::factory()->create([
            'title'   => 'Card 2',
            'trellolist_id' => 1,
            'position' => 2,
            'content' => 'Alguna cosa 2'
        ])->user()->attach(2);

        \App\Models\Card::factory()->create([
            'title'   => 'Card 3',
            'trellolist_id' => 2,
            'position' => 1,
            'content' => 'Alguna cosa 3'
        ])->user()->attach(1);

        \App\Models\Card::factory()->create([
            'title'   => 'Card 4',
            'trellolist_id' => 2,
            'position' => 2,
            'content' => 'Alguna cosa 4'
        ])->user()->attach(2);

        \App\Models\Card::factory()->create([
            'title'   => 'Card 5',
            'trellolist_id' => 3,
            'position' => 1,
            'content' => 'Alguna cosa 5'
        ])->user()->attach(1);
        
    }
}

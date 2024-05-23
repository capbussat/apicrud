<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TrelloTest extends TestCase
{
    // Utilitza aquest Trait per refrescar la base de dades
    // use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    // public function test_homepage(): void
    // {
    //     $response = $this->get('/');
    //     $response->assertStatus(200);
    // }

    // index
    public function test_api_trellos_index(): void
    {
    
        $response  = $this->getJson('/api/trellos/');
        $response->assertStatus(200);
    }

    public function test_api_trellos_store(): void
    {

        $this->post('/api/trellos/', [
            "title" =>"Un altre card",
            "content" => "Un petit contingut per la card. Un petit contingut per la card. Un petit contingut per la card. Un petit contingut per la card",
            "trellolist_id" =>"2",
            "user_id" =>"1"
            
            ]
        );
        $response  = $this->getJson('/api/trellos/1');
        $response->assertStatus(201);
    }

}

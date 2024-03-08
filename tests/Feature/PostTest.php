<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_homepage(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    // index
    public function test_api_posts_index(): void
    {
        $response  = $this->getJson('/api/posts');
        $response->assertStatus(200);
        $response->assertJson(['status' => 'listed']);
    }

    // store
    public function test_api_posts_store(): void
    {
        $data = ['title' => 'Un títol', 'content' => 'El contingut'];
        $response  = $this->postJson('/api/posts/', $data);
        $response->assertStatus(201);
        $response->assertJson(['status' => 'created']);
    }

    public function test_api_posts_store_error_no_title(): void
    {
        $data = [ 'content' => 'El contingut'];
        $response  = $this->postJson('/api/posts/', $data);
        $response->assertStatus(422);
    }

    public function test_api_posts_store_error_no_content(): void
    {
        $data = ['title' => 'Un títol'];
        $response  = $this->postJson('/api/posts/', $data);
        $response->assertStatus(422);
    }
    
}

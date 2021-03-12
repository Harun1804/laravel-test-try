<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    public function testIndex()
    {
        $response = $this->get('/posts');
        $response->assertStatus(200);
    }

    public function testCreate()
    {
        $response = $this->get('/posts/create');
        $response->assertStatus(200);
    }

    public function testStore()
    {
        $response = $this->post('/posts',['body' => 'percobaan2']);
        $response->assertStatus(302);
    }

    public function testEdit()
    {
        $response = $this->get('/posts/4/edit');
        $response->assertStatus(200);
    }

    public function testUpdate()
    {
        $response = $this->put('/posts/4',['body' => 'Percobaan 4']);
        $response->assertStatus(302);
    }

    public function testDelete()
    {
        $response = $this->delete('/posts/4');
        $response->assertStatus(302);
    }
}

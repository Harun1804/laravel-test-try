<?php

namespace Tests\Unit;

use Tests\TestCase;

class HomeTest extends TestCase
{
    public function testHome()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;

class PingTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample(): void
    {
        $response = $this->get('/ping');

        $response->assertStatus(200);
    }
}

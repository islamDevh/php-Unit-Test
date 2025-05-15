<?php

namespace Tests\Smoke;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
class CategoryTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example_custom(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_check_if_login_page_works_fine(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200); 
    }
}
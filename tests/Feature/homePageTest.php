<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class homePageTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_check_if_home_page_works_fine(): void
    {
        // url is /
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('laracasts'); // check if the page contains the word 'laracasts'
        $response->assertViewIs('welcome'); // check if the view is welcome
        // view open successfully
        // response status code is 200

    }
}

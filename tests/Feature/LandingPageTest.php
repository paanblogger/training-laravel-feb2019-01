<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LandingPageTest extends TestCase
{
    /** @test */
    public function it_return_status_code_200()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function it_can_see_login_text()
    {
        $response = $this->get('/');

        $response->assertSee('Login');
    }

    /** @test */
    public function it_can_see_register_text()
    {
        $response = $this->get('/');

        $response->assertSee('Register');
    }

    /** @test */
    public function it_can_see_laravel_text()
    {
        $response = $this->get('/');

        $response->assertSee('Laravel');
    }
}

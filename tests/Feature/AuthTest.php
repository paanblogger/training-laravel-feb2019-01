<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp()
    {
        parent::setUp();
        // $user = factory(\App\User::class)->create([
        //     'name' => 'PHPUnit Test',
        //     'email' => 'test@unit.php',
        //     'password' => \Illuminate\Support\Facades\Hash::make('password'),
        // ]);
    }

    /** @test */
    public function it_can_get_status_code_200_for_login_page()
    {
        $this->get('/login')->assertStatus(200);
    }

    /** @test */
    public function it_can_get_see_see_form_inputs()
    {
        $this->get('/login')
            ->assertSee('E-Mail Address')
            ->assertSee('Password')
            ->assertSee('Login');
    }

    /** @test */
    public function it_can_login()
    {
        $user = factory(\App\User::class)->create([
            'email'    => 'test@unit.php',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        $this->post('/login', [
            'email' => 'test@unit.php', 'password' => 'password',
        ])->assertStatus(302);
    }

    /** @test */
    public function it_can_register()
    {
        $this->post('/login', [
            'name'                  => 'PHPUnit Test',
            'email'                 => 'test@unit.php',
            'password'              => 'password',
            'password_confirmation' => 'password',
        ])->assertStatus(302);
    }
}

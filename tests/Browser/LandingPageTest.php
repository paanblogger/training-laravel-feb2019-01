<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LandingPageTest extends DuskTestCase
{
    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function it_has_proper_landing_page()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel')
                    ->assertSeeLink('Login')
                    ->assertSeeLink('Register')
                    ->pause(self::PAUSE_DURATION)
                    ->clickLink('Login')
                    ->assertPathIs('/login')
                    ->assertSeeLink('Login')
                    ->assertSeeLink('Register')
                    ->pause(self::PAUSE_DURATION)
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->assertSeeLink('Login')
                    ->assertSeeLink('Register')
                    ->pause(self::PAUSE_DURATION)
                    ->type('name', 'Laravel Dusk')
                    ->type('email', 'dusk@laravel.com')
                    ->pause(self::PAUSE_DURATION)
                    ->type('password', 'password')
                    ->type('password_confirmation', 'password')
                    ->press('Register')
                    ->assertPathIs('/home')
                    ->pause(self::PAUSE_DURATION);
        });
    }
}

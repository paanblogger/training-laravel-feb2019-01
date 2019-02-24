<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LandingPageTest extends DuskTestCase
{
    /** @test */
    public function it_has_proper_landing_page()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->pause(self::PAUSE_DURATION)
                    ->assertSee('Laravel')
                    ->assertSeeLink('Login')
                    ->assertSeeLink('Register');
        });
    }
}

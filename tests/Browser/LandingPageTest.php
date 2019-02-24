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
            $browser->visit(new Pages\HomePage)
                    ->visit(new Pages\Login)
                    ->visit(new Pages\Register);
        });
    }
}

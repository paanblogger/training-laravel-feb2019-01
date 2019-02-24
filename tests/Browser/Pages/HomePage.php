<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;

class HomePage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param \Laravel\Dusk\Browser $browser
     */
    public function assert(Browser $browser)
    {
        $browser
            ->resize(800, 600)
            ->screenshot('home-page')
            ->assertSee('Laravel')
            ->assertSeeLink('Login')
            ->assertSeeLink('Register')
            ->pause(1000);
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@element' => '#selector',
        ];
    }
}

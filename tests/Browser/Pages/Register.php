<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;

class Register extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/register';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser
            ->resize(800, 600)
            ->screenshot('register-page')
            ->assertPathIs($this->url())
            ->assertSeeLink('Login')
            ->assertSeeLink('Register')
            ->pause(1000)
            // try to register
            ->type('name', 'Laravel Dusk')
            ->pause(1000)
            ->type('email', 'dusk@laravel.com')
            ->pause(1000)
            ->type('password', 'password')
            ->type('password_confirmation', 'password')
            ->screenshot('register-form-filled-page')
            ->press('Register')
            ->pause(1000)
            // verify registration
            ->assertPathIs('/home')
            ->screenshot('home-user-page')
            ->pause(300);
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

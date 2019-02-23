<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserObserverTest extends TestCase
{
    /** @test */
    public function it_has_user_observer_class()
    {
    	$this->assertTrue(class_exists('\App\Observers\UserObserver'));
    }
    // add more test..ensure observer is register, it works as expected
}

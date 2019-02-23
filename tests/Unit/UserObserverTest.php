<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserObserverTest extends TestCase
{
	use RefreshDatabase;

    /** @test */
    public function it_has_user_observer_class()
    {
    	$this->assertTrue(class_exists('\App\Observers\UserObserver'));
    }

    /** @test */
    public function it_can_create_hashslug()
    {
    	$user = factory(\App\User::class)->create();

    	// assert user->hashslug is not empty
    	$this->assertNotNull($user->hashslug);
    }
}

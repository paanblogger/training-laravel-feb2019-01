<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SeedPreTest extends TestCase
{
    /** @test */
    public function it_has_preseed_seeder_class()
    {
    	$this->assertTrue(class_exists('SeedPreseedSeeder'));
    }

    /** @test */
    public function it_has_seed_pre_command_class()
    {
    	$this->assertTrue(class_exists('\App\Console\Commands\Seed\PreseedCommand'));
    }

    /** @test */
    public function it_has_seed_pre_command()
    {
    	$this->assertTrue(
    		\Illuminate\Support\Arr::has(
    			\Artisan::all(), 'seed:pre'
    		)
    	);
    }

    /** @test */
    public function it_can_seed_pre_seed_data()
    {
    	\Artisan::call('seed:pre');

    	$this->assertDatabaseHas('users', [
	        'email' => 'superadmin@t.app'
	    ]);

	    // assert acl
	    // assert settings
    }
}

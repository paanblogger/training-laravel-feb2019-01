<?php

namespace Tests\Unit;

use Tests\TestCase;

class HelperTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function it_has_user_helper()
    {
        $this->assertTrue(function_exists('user'));
    }

    /** @test */
    public function it_has_abc_helper()
    {
        $this->assertTrue(function_exists('abc'));
    }

    /** @test */
    public function abc_helper_return_abc_output()
    {
        $output = abc();
        $this->assertEquals('abc', $output);
    }

    /** @test */
    public function it_has_hashslug_helper()
    {
        $this->assertTrue(function_exists('hashslug'));
    }
}

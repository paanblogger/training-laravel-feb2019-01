<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Notifications\WelcomNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeNotificationTest extends TestCase
{
    /** @test */
    public function it_send_nothing()
    {
        Notification::fake();

        // Assert that no notifications were sent...
        Notification::assertNothingSent();
    }

    /** @test */
    public function it_can_welcome_notification()
    {
        Notification::fake();

        $user = factory(\App\User::class)->create();
        $user->notify(new WelcomNotification());
        
        Notification::assertSentTo(
            [$user], WelcomNotification::class
        );
    }
}

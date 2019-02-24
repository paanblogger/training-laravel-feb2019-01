<?php

namespace App\Observers;

use App\User;

class Kernel
{
    public static function register()
    {
        User::observe(UserObserver::class);
    }
}

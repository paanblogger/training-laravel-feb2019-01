<?php

namespace App\Providers;

use App\Observers\UserObserver;
use App\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // User::observe(UserObserver::class);
        \App\Observers\Kernel::register();

        \App\Processors\A::macro('c', function () {
            // do your stuf...
            return 'c';
        });

        \App\Macros\Response::register();
        \App\Macros\Routing::register();
        \App\Macros\Blueprint::register();
    }
}

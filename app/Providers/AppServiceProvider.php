<?php

namespace App\Providers;

use App\User;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // User::observe(UserObserver::class);
        \App\Observers\Kernel::register();

        \App\Processors\A::macro('c', function() {
            // do your stuf...
            return 'c';
        });

        \App\Macros\Response::register();
    }
}

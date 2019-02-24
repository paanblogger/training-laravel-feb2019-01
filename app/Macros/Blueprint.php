<?php

namespace App\Macros;

use Illuminate\Database\Schema\Blueprint as DefaultBlueprint;

class Blueprint
{
    public static function register()
    {
        DefaultBlueprint::macro('ic', function () {
            return $this->string('ic', 12)->unique()->index()->nullable();
        });

        DefaultBlueprint::macro('hashslug', function () {
            return $this->string('hashslug')->unique()->index();
        });

        DefaultBlueprint::macro('name', function () {
            return $this->string('name')->index();
        });

        DefaultBlueprint::macro('uniqueEmail', function () {
            return $this->string('email')->unique();
        });

        DefaultBlueprint::macro('password', function () {
            return $this->string('password');
        });
    }
}

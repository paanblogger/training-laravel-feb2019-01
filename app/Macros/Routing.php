<?php

namespace App\Macros;

use Illuminate\Support\Facades\Route as DefaultRouter;
use Illuminate\Support\Str;

class Routing
{
    public static function register()
    {
        if (!DefaultRouter::hasMacro('setting')) {
            DefaultRouter::macro('setting', function ($module) {

                // Set URL Formatting
                // Payroll >>> settings/payrolls/
                $url        =  str_replace('.', '', strtolower(Str::plural($module)));
                // Set the URL Route Name
                // Payroll >>> settings.payroll
                $name       = 'settings.' . strtolower(Str::singular($module));
                // Set the Controller Class Name
                // \App\Http\Controllers\Settings\PayrollController
                $controller = Str::studly(str_replace('.', ' ', $module)) . 'Controller';

                DefaultRouter::group([
                    'prefix'     => 'settings',
                    'namespace'  => 'Settings', // \App\Http\Controllers\Settings\
                    'middleware' => ['auth'],
                ], function () use ($url, $name, $controller) {
                    DefaultRouter::get($url . '/edit', $controller . '@edit')->name($name . '.edit');
                    DefaultRouter::put($url . '/update', $controller . '@update')->name($name . '.update');
                });
            });
        }
    }
}
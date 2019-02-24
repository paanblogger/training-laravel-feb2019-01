<?php

if (! function_exists('hashslug')) {
    function hashslug()
    {
        return \Illuminate\Support\Str::random(40);
    }
}

if (! function_exists('abc')) {
    function abc()
    {
        return 'abc';
    }
}

if (! function_exists('user')) {
    function user()
    {
        return auth()->user();
    }
}

if (! function_exists('guest')) {
    function guest()
    {
        return auth()->guest();
    }
}

// foreach (glob(__DIR__ . '/*.php') as $path) {
// 	if(basename($path) !== basename(__FILE__)) {
//     	require $path;
//     }
// }

collect(glob(__DIR__ . '/*.php'))
    ->each(function ($path) {
        if (basename($path) !== basename(__FILE__)) {
            require $path;
        }
    });

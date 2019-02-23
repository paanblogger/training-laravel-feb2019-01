<?php 

namespace App\Observers;

use App\User;
use App\Observers\UserObserver;

class Kernel
{
	public static function register()
	{
		User::observe(UserObserver::class);
	}
}
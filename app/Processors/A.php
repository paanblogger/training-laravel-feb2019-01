<?php 


namespace App\Processors;

use Illuminate\Support\Traits\Macroable;

class A {
	use Macroable;
	
	public function b()
	{
		return 'b';
	}
}
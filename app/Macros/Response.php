<?php 

namespace App\Macros;

use Illuminate\Support\Facades\Response as HttpResponse;

class Response
{
	public static function register()
	{
		HttpResponse::macro('pdf', function($type) {
			$pathToFile = storage_path( auth()->user()->id . '/' . $type . '.pdf' );

			if(! file_exists($pathToFile)) {
				abort(404);
			}

			return response()->download($pathToFile);
		});

		HttpResponse::macro('welcome', function() {
			return 'hello world';
		});

		if(! HttpResponse::hasMacro('sayHi')) {
			HttpResponse::macro('sayHi', function($name) {
				return 'Hi ' . $name;
			});
		}
	}
}
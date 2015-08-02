<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CallingServiceProvider extends ServiceProvider {
	public function register() {
		$this->app->bind('App\Acme\Calling\CallingInterface', 'App\Acme\Calling\TwilioCalling');
	}
}
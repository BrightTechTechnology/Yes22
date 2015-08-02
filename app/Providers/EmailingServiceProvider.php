<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EmailingServiceProvider extends ServiceProvider {
    public function register() {
        $this->app->bind('App\Acme\Emailing\EmailingInterface', 'App\Acme\Emailing\MandrillEmailing');
    }
}
<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SmsingServiceProvider extends ServiceProvider {
    public function register() {
        $this->app->bind('App\Acme\Smsing\SmsingInterface', 'App\Acme\Smsing\AccessyouSmsing');
    }
}
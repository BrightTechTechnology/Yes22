<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class InvoicingServiceProvider extends ServiceProvider {
    public function register() {
        $this->app->bind('App\Acme\Invoicing\InvoicingInterface', 'App\Acme\Invoicing\AcmeInvoicing');
    }
}
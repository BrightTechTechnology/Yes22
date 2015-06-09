<?php namespace App\Acme\Billing;

interface BillingInterface {
	public function store ($token, $user);
	public function charge ($token);
}
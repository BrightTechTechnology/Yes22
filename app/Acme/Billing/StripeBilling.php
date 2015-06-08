<?php namespace App\Acme\Billing;

use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\InvalidRequestError;
use Stripe\CardError;
use Config;
use App\Exceptions;

class StripeBilling implements BillingInterface {

	public function __construct(){
		Stripe::setApiKey(Config::get('stripe.secret_key'));
	}

	public function charge(array $data){

		try {
			$customer = Customer::create([
				'card' => $data['token'],
				'description' => $data['email'],
			]);

			Charge::create([
				'customer' => $customer->id,
				'amount' => 1000,
				'currency' => 'usd',
			]);

			return $customer->id;
		}

		// errors here: https://stripe.com/docs/api#errors

		catch (InvalidRequestError $e) {
			// Invalid parameters supplied to Stripe's API
			throw new Exception($e->getMessage());
		}

		catch (CardError $e) {
			throw new Exception($e->getMessage());
		}
	}
}

// to get a customer stored in DB
// Customer::retrieve($user->billing_id);
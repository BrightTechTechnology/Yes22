<?php namespace App\Acme\Billing;

use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\InvalidRequestError;
use Stripe\CardError;
use Config;
use Exception;

class StripeBilling implements BillingInterface {

	public function __construct(){
		Stripe::setApiKey(Config::get('stripe.secret_key'));
	}

	public function store($token, $user){
		try {
			$customer = Customer::create([
				'card' => $token,
				'description' => $user->id,
			]);

			$user->billing_id = $customer->id;
			$user->save();
			print_r('user has been saved. ');
		}
		catch (\Stripe\Error\Card $e) {
		    $body = $e->getJsonBody();
		    $err  = $body['error'];

		    print('Status is:' . $e->getHttpStatus() . "\n");
		    print('Type is:' . $err['type'] . "\n");
		    print('Code is:' . $err['code'] . "\n");

		    // param is '' in this case
		    print('Param is:' . $err['param'] . "\n");
		    print('Message is:' . $err['message'] . "\n");

		} catch (\Stripe\Error\InvalidRequest $e) {
			throw new Exception('Invalid parameters were supplied to Stripes API');
		} catch (\Stripe\Error\Authentication $e) {
		    throw new Exception('Authentication with Stripes API failed');
		} catch (\Stripe\Error\ApiConnection $e) {
		    throw new Exception('Network communication with Stripe failed');
		} catch (\Stripe\Error\Base $e) {
			throw new Exception('Display a very generic error to the user, and maybe send yourself an email');
		} catch (Exception $e) {
		    throw new Exception('Something else happened, completely unrelated to Stripe');
		}
	}

	public function charge($user){
		try {

		    return Charge::create([
		    	'customer' => $user->billing_id,
		    	'amount' => 1000,
				'currency' => 'usd',
			]);
		}

		catch (\Stripe\Error\Card $e) {
		    $body = $e->getJsonBody();
		    $err  = $body['error'];

		    print('Status is:' . $e->getHttpStatus() . "\n");
		    print('Type is:' . $err['type'] . "\n");
		    print('Code is:' . $err['code'] . "\n");

		    // param is '' in this case
		    print('Param is:' . $err['param'] . "\n");
		    print('Message is:' . $err['message'] . "\n");

		} catch (\Stripe\Error\InvalidRequest $e) {
			throw new Exception('Invalid parameters were supplied to Stripes API');
		} catch (\Stripe\Error\Authentication $e) {
		    throw new Exception('Authentication with Stripes API failed');
		} catch (\Stripe\Error\ApiConnection $e) {
		    throw new Exception('Network communication with Stripe failed');
		} catch (\Stripe\Error\Base $e) {
			throw new Exception('Display a very generic error to the user, and maybe send yourself an email');
		} catch (Exception $e) {
		    throw new Exception('Something else happened, completely unrelated to Stripe');
		}
	}
}

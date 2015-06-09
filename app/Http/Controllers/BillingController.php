<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;


class BillingController extends Controller {

	public function __construct () {
		$this->middleware('auth');
	}


	public function showForm()
	{
		return view('frontend.billing');
	}

	public function chargeClient()
	{

		if (!\Auth::user()->billing_id)
		{
			$this->storePaymentDetails();
		}

		$billing = \App::make('App\Acme\Billing\BillingInterface');

		try
		{
			$user = \Auth::user();
			$charge = $billing->charge($user);
			if ($charge)
			{
				print_r ('successful charge');
			}
		}
		catch (Exception $e)
		{
			return \Redirect::refresh()->withFlashMessage($e->getMessage());
		}
	}

	public function storePaymentDetails()
	{
		$billing = \App::make('App\Acme\Billing\BillingInterface');

		try
		{
			$user = \Auth::user();
			$billing->store(\Input::get('token'), $user);
		}
		catch (Exception $e)
		{
			return \Redirect::refresh()->withFlashMessage($e->getMessage());
		}
	}

}

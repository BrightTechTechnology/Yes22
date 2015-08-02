<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Exception;


class BillingController extends Controller
{
    protected $billingService;

    public function __construct()
    {
        $this->billingService = \App::make('App\Acme\Billing\BillingInterface');
    }

    public function postBilling()
    {
        if (!\Auth::user()->billing_id) {
            $this->storePaymentDetails();
        }
        try {
            $user = \Auth::user();
            $amount = 2000;
            $amountFormatted = number_format($amount/100, 2);
            $currency = 'usd';
            $charge = $this->billingService->charge($user, $amount, $currency);
            if ($charge) {
                \Session::flash('flash-message', 'Your credit card has been charged '.$currency.' '.$amountFormatted);
                return \Redirect::refresh();
            }
        } catch (Exception $e) {
            \Session::flash('flash-message', $e->getMessage());
            return \Redirect::refresh();
        }
    }

    public function storePaymentDetails()
    {
        try {
            $user = \Auth::user();
            $this->billingService->store(\Input::get('token'), $user);
        } catch (Exception $e) {
            return \Redirect::refresh()->withFlashMessage($e->getMessage());
        }
    }
}
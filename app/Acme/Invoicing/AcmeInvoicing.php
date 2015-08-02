<?php namespace App\Acme\Invoicing;

use App\Invoice;
use App\Http\Controllers\ConfigController;
use Carbon\Carbon;

class AcmeInvoicing
{
    protected $invoice;
    protected $config;

    public function __construct()
    {
        $this->invoice = new Invoice;
        $this->config = new ConfigController;
    }

    /**
     * persists invoice in database
     * @param $data [start, end, rate, currency]
     */
    public function create($data)
    {
        $this->invoice->supplier = $data['supplier'];
        $this->invoice->amount = $this->getAmount($data);
        $this->invoice->rate = $data['rate'];
        $this->invoice->currency = $data['currency'];
        $this->invoice->user_id = \Auth::user()->id;
        $this->invoice->theme = $this->config->getTheme();
        $this->invoice->save();
        return $this->invoice->id;
    }

    /**
     * @param $data [start, end, rate]
     * @return int invoice amount in cents
     */
    public function getAmount($data)
    {
        $start = new Carbon ($data['start']);
        $secondsDifference = $start->diffInSeconds($data['end']);
        $rateCentsPerSecond = ($data['rate'] / 60) * 100;

        $amountInCents = (integer) ($secondsDifference * $rateCentsPerSecond);
        return $amountInCents;
    }

    public function getInvoiceObject($id)
    {
        return Invoice::where('id', $id);
    }

}
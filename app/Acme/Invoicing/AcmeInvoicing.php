<?php namespace App\Acme\Invoicing;

use App\Invoice;

class AcmeInvoicing {
    public function create ($data)
    {
        $invoice = new Invoice;
        dd($invoice);
    }
}
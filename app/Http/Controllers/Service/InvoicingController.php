<?php

namespace App\Http\Controllers\Service;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InvoicingController extends Controller
{
    protected $invoiceService;

    public function __construct()
    {
        $this->invoiceService = \App::make('App\Acme\Invoicing\InvoicingInterface');
    }

    public function getCreate(){
        $this->invoiceService->create([]);
    }
}

<?php

namespace App\Http\Controllers\Service;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class InvoicingController extends Controller
{
    protected $invoiceService;

    public function __construct()
    {
        $this->invoiceService = \App::make('App\Acme\Invoicing\InvoicingInterface');
    }

    public function getCreate()
    {
        $data = [
            'start' => Carbon::now()->subMinutes(30),
            'end' => Carbon::now(),
            'rate' => 21,
            'currency' => 'HKD',
        ];

        $this->invoiceService->create($data);
    }
}

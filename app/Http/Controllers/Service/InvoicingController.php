<?php

namespace App\Http\Controllers\Service;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class InvoicingController extends Controller
{
    protected $invoiceService;
    protected $emailingService;

    public function __construct()
    {
        $this->invoicingService = \App::make('App\Acme\Invoicing\InvoicingInterface');
        $this->emailingService = \App::make('App\Acme\Emailing\EmailingInterface');
    }

    public function getCreate()
    {
        $invoiceData = [
            'start' => Carbon::now()->subMinutes(30),
            'end' => Carbon::now(),
            'rate' => 21,
            'currency' => 'HKD',
        ];
        $invoiceId = $this->invoicingService->create($invoiceData);
        $invoiceAmount = $this->invoicingService->getAmount($invoiceData);

        $emailData = [
          //$data [template, content, fromEmail, fromName, toEmail, toName, subject]
            'template' => 'invoice',
            'content' => [
                'invoiceId' => $invoiceId,
                'invoiceDate' => Carbon::now()->format('Y/m/d'),
                'invoiceAmount' => $invoiceAmount,
            ],
            'fromEmail' => 'invoices@gotarot.com.hk',
            'fromName' => 'Gotarot Invoicing',
            'toEmail' => \Auth::user()->email,
            'toName' =>  \Auth::user()->name,
            'subject' => 'Your Invoice',
        ];
        $this->emailingService->send($emailData);
    }
}

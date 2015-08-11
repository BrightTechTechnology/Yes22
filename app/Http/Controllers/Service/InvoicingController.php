<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\ConfigController;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class InvoicingController extends Controller
{
    protected $invoiceService;
    protected $emailingService;
    protected $config;

    public function __construct()
    {
        $this->invoicingService = \App::make('App\Acme\Invoicing\InvoicingInterface');
        $this->emailingService = \App::make('App\Acme\Emailing\EmailingInterface');
        $this->config = new ConfigController;
    }

    public function getCreate()
    {
        $createData = [
            'start' => Carbon::now()->subMinutes(30),
            'end' => Carbon::now(),
            'supplier' => 'Mani',
            'rate' => 21,
            'currency' => 'HKD',
        ];
        $invoiceId = $this->invoicingService->create($createData);
        $invoiceObject = $this->invoicingService->getInvoiceObject($invoiceId);
        $date = new \DateTime($invoiceObject->end);
        $date = $date->format('Y/m/d');

        $emailData = [
            'template' => 'invoice',
            'content' => [
                'id' => $invoiceObject->id,
                'date' => $date,
                'amount' => number_format($invoiceObject->amount/100, 2),
                'currency' => $invoiceObject->currency,
                'theme' => ucfirst($invoiceObject->theme),
                'start' => $invoiceObject->start,
                'end' => $invoiceObject->end,
                'rate' => $invoiceObject->rate,
                'supplier' => $invoiceObject->supplier,
            ],
            'fromEmail' => 'invoices@gotarot.com.hk',
            'fromName' => 'Gotarot Invoicing',
            'toEmail' => \Auth::user()->email,
            'toName' =>  \Auth::user()->name,
            'subject' => 'Your Invoice',
        ];
        $this->emailingService->send($emailData);
    }

    public function getShow($id)
    {
        return 'this is invoice with id '.$id;
    }
}

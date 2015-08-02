<?php

namespace App\Http\Controllers\Service;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SmsingController extends Controller
{
    protected $smsService;

    public function __construct()
    {
        $this->smsService = \App::make('App\Acme\Smsing\SmsingInterface');
    }

    public function getSend()
    {
        $data = [
            'phone'     =>  '85269079611',
            'message'   =>  'this is a test',
        ];

        $this->smsService->send($data);
    }
}

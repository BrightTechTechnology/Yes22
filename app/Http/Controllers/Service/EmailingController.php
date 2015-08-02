<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\ConfigController;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmailingController extends Controller
{
    protected $emailingService;
    protected $config;

    public function __construct()
    {
        $this->emailingService = \App::make('App\Acme\Emailing\EmailingInterface');
        $this->config = new ConfigController;
    }

    public function getSend()
    {
        $data = [
            'toEmail'   =>  'kuschnik.gerhard@gmail.com',
            'toName'    =>  'Gerhard',
            'fromEmail' =>  'support@gotarot.com.hk',
            'fromName'  =>  'Support',
            'subject'   =>  'Signup successful',
            'template'     =>  'signup',
        ];

        $this->emailingService->send($data);
    }
}

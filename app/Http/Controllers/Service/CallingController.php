<?php

namespace App\Http\Controllers\Service;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CallingController extends Controller
{
    protected $callingService;

    public function __construct()
    {
        $this->callingService = \App::make('App\Acme\Calling\CallingInterface');
    }

    public function getIncoming()
    {
        $instructions = [
            $this->callingService->say('hello people'),
            $this->callingService->play('http://demo.twilio.com/hellomonkey/monkey.mp3'),
        ];

        return $this->callingService->makeResponse($instructions);
    }

    public function getOutboundCall()
    {
        return $this->callingService->outboundCall('+85269079611', action('Service\CallController@getIncoming'));
    }









}
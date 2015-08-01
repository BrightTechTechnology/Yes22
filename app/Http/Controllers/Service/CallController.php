<?php

namespace App\Http\Controllers\Service;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Acme\Calling\TwilioCalling;

class CallController extends Controller
{
    protected $callingService;

    public function __construct()
    {
        $this->callingService = new TwilioCalling;
    }

    public function getIncoming()
    {
        //return $this->callingService->textRespond('Dialing out works, great, right?');
        return $this->callingService->audioRespond('http://demo.twilio.com/hellomonkey/monkey.mp3');
    }

    public function getDial()
    {
        $this->callingService->dial('+85269079611', action('Service\CallController@getIncoming'));
    }









}
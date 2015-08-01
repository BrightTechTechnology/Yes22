<?php

namespace App\Http\Controllers\Service;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CallController extends Controller
{
    protected $xml;
    protected $ivr;

    public function __construct()
    {
        $this->xml = new \Services_Twilio_Twiml();
        $this->ivr = new \Services_Twilio(env('TWILIO_ACCOUNT_SID'), env('TWILIO_AUTH_TOKEN'));
    }

    public function getIncoming()
    {
        return $this->xmlVoiceToText('Dialing out works, great, right?');
    }

    public function getDial()
    {
        $this->dial('+85269079611', action('Service\CallController@getIncoming'));
    }







    protected function dial($to, $responseUrl)
    {
        try {
            $this->ivr->account->calls->create(
                env('TWILIO_NUMBER'),
                $to,
                $responseUrl
            );
        } catch (\Services_Twilio_RestException $e) {
            echo $e->getMessage();
        }
    }

    protected function xmlVoiceToText($message)
    {
        $xml = $this->xml->say($message, ['voice' => 'alice']);
        $response = \Response::make($xml, 200);
        $response->header('Content-Type', 'text/xml');
        return $response;
    }


}
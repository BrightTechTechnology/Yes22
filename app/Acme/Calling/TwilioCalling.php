<?php namespace App\Acme\Calling;



class TwilioCalling implements CallingInterface
{
    protected $xml;
    protected $ivr;

    public function __construct()
    {
        $this->xml = new \Services_Twilio_Twiml();
        $this->ivr = new \Services_Twilio(env('TWILIO_ACCOUNT_SID'), env('TWILIO_AUTH_TOKEN'));
    }


    public function dial($to, $responseUrl)
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

    public function textRespond($message)
    {
        $xml = '
            <Response>
                <Say>'.$message.'</Say>
            </Response>
        ';
        $response = \Response::make($xml, 200);
        $response->header('Content-Type', 'text/xml');
        return $response;
    }

    public function audioRespond($path)
    {
        $xml = '
            <Response>
                <Play>'.$path.'</Play>
            </Response>
        ';
        $response = \Response::make($xml, 200);
        $response->header('Content-Type', 'text/xml');
        return $response;
    }



}
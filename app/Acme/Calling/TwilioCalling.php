<?php namespace App\Acme\Calling;

/**
 * Class TwilioCalling
 * @package App\Acme\Calling
 *
 * say ($message)
 * pause ($length = 1)
 * play ($path)
 * gather($digit, $introduction, $path)
 * forward($number)
 * record()
 * hangup ()
 * queue (NOT IMPLEMENTED)
 * redirect ($path)
 * reject ()
 * mms ($message = null, $path)
 *
 * simultan ring
 * https://www.twilio.com/labs/twimlets/simulring

    Queue - Add the caller to a queue of callers.
    Redirect - Redirect call flow to a different TwiML document.
    Pause - Wait before executing more instructions
    Reject - Decline an incoming call without being billed.
    Message - Send an MMS or SMS message reply
 *
 *
 *
 *
 * dial($number, $responseUrl)
 */
class TwilioCalling implements CallingInterface
{
    protected $xml;
    protected $ivr;

    public function __construct()
    {
        $this->xml = new \Services_Twilio_Twiml();
        $this->ivr = new \Services_Twilio(env('TWILIO_ACCOUNT_SID'), env('TWILIO_AUTH_TOKEN'));
    }

    public function say($message)
    {
        // voice (man, woman, alice)
        // loop
        // language (zh-HK, zh-TW, de-DE, en-AU, en-CA, en-GB, en-US)
        return '<Say voice="woman">' . $message . '</Say>';
    }

    public function play($path)
    {
        // loop
        // digits
        return '<Play>' . $path . '</Play>';
    }

    public function pause($length = 1)
    {
        return '<Pause length="'.$length.'"/>';
    }

    public function gather($digit, $introduction, $path)
    {
        return '<Gather numDigits="' . $digit . '" action="' . $path . '" method="GET">'
        . $introduction .
        '</Gather>';
    }

    public function forward($destination)
    {
        // action (relative or absolute URL) - where to answer with the result when dial finished
            // Any TwiML verbs occurring after a <Dial> which specifies an 'action' attribute are unreachable
        // method (GET, POST)
        // timeout
        // hangupOnStar (true, false)
        // timeLimit
        // callerId (a valid phone number, or client identifier if you are dialing a <Client>)
        // record (do-not-record, record-from-answer, record-from-ringing)
        // trim (trim-silence, do-not-trim)


        return '<Dial record=”record-from-ringing”>' . $destination . '</Dial>';
        // $destination can be:
            // <Number></Number>
            // <Conference></conference>

        // Following gets passed to action url:
            //DialCallStatus (completed, busy, no-answer, failed, canceled)
            //DialCallSid	    The call sid of the new call leg. This parameter is not sent after dialing a conference.
            //DialCallDuration	The duration in seconds of the dialed call. This parameter is not sent after dialing a conference.
            //RecordingUrl	    The URL of the recorded audio. This parameter is only sent if a recording is used with the <Dial> verb, and does not include recordings from the <Record> verb, Record=True on REST API calls, or <Conference> record.
    }

    public function record()
    {
        // action	relative or absolute URL, what to do after the action
        // method	GET, POST
        // timeout	positive integer	5
        // finishOnKey	any digit, #, *	1234567890*#
        // maxLength	integer greater than 1	3600 (1 hour)
        // transcribe	true, false
        // transcribeCallback	relative or absolute URL	none
        // playBeep	true, false	true
        // trim	trim-silence, do-not-trim	trim-silence

        return '<Record maxLength="30"/>';

        // answer with
            // RecordingUrl
            // RecordingDuration
            // Digits
            // some more also, check here https://www.twilio.com/docs/api/twiml/record
    }

    public function hangup ()
    {
        return '<Hangup/>';
    }

    public function reject ()
    {
        return '<Reject>';
    }

    public function redirect($path)
    {
        return '<Redirect>'.$path.'</Redirect>';
    }

    public function mms($message = null, $path)
    {
        $result = '<Message>';
        if ($message != null) {
            $result = $result.'<Body>'.$message.'</Body>';
        }
        $result = $result.'<Media>'.$path.'</Media>';
        $result = $result.'</Message>';
        return $result;
    }

//////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////


    public function outboundCall($number, $responseUrl)
    {
        try {
            $this->ivr->account->calls->create(
                env('TWILIO_NUMBER'),
                $number,
                $responseUrl
            );
        } catch (\Services_Twilio_RestException $e) {
            echo $e->getMessage();
        }
    }

    public function makeResponse($instructions)
    {
        $xml = '<Response>';
        foreach ($instructions as $instruction) {
            $xml = $xml . $instruction;
        }
        $xml = $xml . '</Response>';
        $response = \Response::make($xml, 200);
        $response->header('Content-Type', 'text/xml');
        return $response;
    }

}
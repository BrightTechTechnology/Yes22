<?php namespace App\Acme\Emailing;

use Mail;

class MandrillEmailing implements EmailingInterface {
    public function send ($data)
    {
        try {
            Mail::send($data['theme'], [], function ($message) use ($data) {
                $message->from($data['fromEmail'], $data['fromName']);
                $message->to($data['toEmail'], $data['toName']);
                $message->subject($data['subject']);
            });
        } catch (\Exception $e) {
            throw new \Exception('Error occured');
        }
    }
}
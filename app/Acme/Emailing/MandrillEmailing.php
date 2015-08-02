<?php namespace App\Acme\Emailing;

use Mail;

class MandrillEmailing implements EmailingInterface {
    public function send ($data)
    {
        $theme = 'theme.emails'.$this->config->getTheme().$data['theme'];
        try {
            Mail::send($theme, [], function ($message) use ($data) {
                $message->from($data['fromEmail'], $data['fromName']);
                $message->to($data['toEmail'], $data['toName']);
                $message->subject($data['subject']);
            });
        } catch (\Exception $e) {
            throw new \Exception('Error occured');
        }
    }
}
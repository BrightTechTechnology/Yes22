<?php namespace App\Acme\Emailing;

use Mail;
use App\Http\Controllers\ConfigController;

class MandrillEmailing implements EmailingInterface {

    protected $config;

    public function __construct()
    {
        $this->config = new ConfigController;
    }

    /**
     * @param $data [template, content, fromEmail, fromName, toEmail, toName, subject]
     * @throws \Exception
     */

    public function send ($data)
    {
        $theme = 'theme.'.$this->config->getTheme().'.emails.'.$data['template'];
        try {
            Mail::send($theme, $data['content'], function ($message) use ($data) {
                $message->from($data['fromEmail'], $data['fromName']);
                $message->to($data['toEmail'], $data['toName']);
                $message->subject($data['subject']);
            });
        } catch (\Exception $e) {
            throw new \Exception('an error occured');
        }
    }
}
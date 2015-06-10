<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    public function send()
    {
        $email = 'gerhard@gotarot.com.hk';

        Mail::send('emails.signup', [], function ($message) use ($email) {
            $message->from('support@gotarot.com.hk', 'GoTarot Supprt');
            $message->to($email);
            $message->subject('Thanks, man');
        });
    }
}

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
        $email = 'kuschnik.gerhard@gmail.com';

        Mail::send('emails.whitelabel.signup', [], function ($message) use ($email) {
            $message->from('support@gotarot.com.hk', 'GoTarot Support');
            $message->to($email);
            $message->subject('Signup successful');
        });
    }
}

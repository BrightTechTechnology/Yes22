<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SmsController extends Controller
{
    public function send()
    {
        $phone = '85269079611';
        $message = 'this is a test';
        $size="l";
        $message = urlencode($message); $smsphone = $phone ;
        $link = "http://api.accessyou.com/sms/sendsms-utf8.php?msg=$message&phone=$smsphone&pwd=50346225&accountno=11008750&size=$size";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_exec($ch);
        curl_close($ch);
    }
}

<?php namespace App\Acme\Smsing;

class AccessyouSmsing implements SmsingInterface
{
    public function send ($data) {

        $data['message'] = urlencode($data['message']);

        $link = 'http://api.accessyou.com/sms/sendsms-utf8.php'.
            '?msg='.$data['message'].
            '&phone='.$data['phone'].
            '&pwd='.env('ACCESSYOU_PWD').
            '&accountno='.env('ACCESSYOU_ACCOUNTNO').
            '&size=l';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_exec($ch);
        curl_close($ch);
    }
}
<?php namespace App\Acme\Calling;

interface CallingInterface {

    public function outboundCall($number, $responseUrl);
    public function makeResponse($instructions);

}
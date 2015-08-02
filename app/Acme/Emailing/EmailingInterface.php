<?php namespace App\Acme\Emailing;

interface EmailingInterface {
    public function send ($data);
}
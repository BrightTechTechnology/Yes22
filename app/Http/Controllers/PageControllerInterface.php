<?php

namespace App\Http\Controllers;

use App\Http\Requests;

interface PageControllerInterface
{
    public function index();
    public function authenticated();    // where to forward each user type after login
    public function fallback($method);  // if method not exists (check for supplier profile)
}
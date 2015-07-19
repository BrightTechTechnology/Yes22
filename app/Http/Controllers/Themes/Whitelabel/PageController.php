<?php

namespace App\Http\Controllers\Themes\Whitelabel;

use Illuminate\Http\Request;
use Mail;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return 'foo-bar method';
    }
}

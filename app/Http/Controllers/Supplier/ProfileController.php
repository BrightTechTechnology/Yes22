<?php

namespace App\Http\Controllers\Supplier;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

    public function edit()
    {
        return view('supplier\profile');
    }

    public function update()
    {
        \Auth::user()->profile = \Input::get('profile');
        \Auth::user()->save();
        return view('supplier\profile');
    }

}

<?php

namespace App\Http\Controllers\Supplier;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

    public function edit()
    {
        $profile = \Auth::user()->profile;
        $officialname = \Auth::user()->officialname;
        return view('supplier.profile', compact('profile', 'officialname'));
    }

    public function update()
    {
        \Auth::user()->profile = \Input::get('profile');
        $profile = \Input::get('profile');
        \Auth::user()->officialname = \Input::get('officialname');
        $officialname = \Input::get('officialname');
        \Auth::user()->save();

        return view('supplier.profile', compact('profile', 'officialname'));
    }

}

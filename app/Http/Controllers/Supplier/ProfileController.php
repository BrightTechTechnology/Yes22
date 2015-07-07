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
        $username = \Auth::user()->username;
        $officialname = \Auth::user()->officialname;
        if ($officialname == '') {
            $officialname = \Auth::user()->username;
        }
        return view('supplier.profile', compact('profile', 'username', 'officialname'));
    }

    public function update()
    {
        // save the input
        \Auth::user()->profile = \Input::get('profile');
        \Auth::user()->officialname = \Input::get('officialname');
        \Auth::user()->save();

        return redirect()->action('Supplier\ProfileController@edit');
    }

}

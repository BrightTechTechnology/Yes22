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
        $name = \Auth::user()->name;
        return view('supplier.profile', compact('profile', 'name'));
    }

    public function update()
    {
        // save the input
        \Auth::user()->profile = \Input::get('profile');
        \Auth::user()->name = \Input::get('name');
        \Auth::user()->save();

        return redirect()->action('Supplier\ProfileController@edit');
    }

}

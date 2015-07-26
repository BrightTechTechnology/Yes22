<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{

    public function edit()
    {
        $profile = \Auth::user()->profile;
        $name = \Auth::user()->name;
        $id = \Auth::user()->id;
        return view('supplier.profile', compact('profile', 'name', 'id'));
    }

    public function update()
    {
        // save the input
        \Auth::user()->profile = \Input::get('profile');
        \Auth::user()->name = \Input::get('name');

        // handle image
        if (\Input::hasfile('image')){
            // save image
            $file = \Input::file('image');
            $file->move('img/upload/supplier/', 'supplier'.\Auth::user()->id.'.jpg');

            // process to become square
            $img = Image::make('img/upload/supplier/supplier'.\Auth::user()->id.'.jpg');
            $newPixelDimensions = $img->height();
            if ($img->height() > 500) {
                $newPixelDimensions = 500;
            }

            if ($img->height() > $img->width()) {
                $img->resize($newPixelDimensions, null, function ($constraint) {$constraint->aspectRatio();});
            } else {
                $img->resize(null, $newPixelDimensions, function ($constraint) {$constraint->aspectRatio();});
            }
            $img->crop($newPixelDimensions, $newPixelDimensions);
            $img->save('img/upload/supplier/supplier'.\Auth::user()->id.'.jpg', 80);
        }
        \Auth::user()->save();

        return redirect()->action('Supplier\ProfileController@edit');
    }

}

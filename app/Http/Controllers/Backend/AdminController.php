<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Contracts\View\View;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('staff');
    }

    /**
     * Display a admin page in backend
     *
     * @return View
     */
    public function index()
    {
        $staffs = \App\User::where('staff', true)->get();
        $suppliers = \App\User::where('supplier', true)->get();
        $users = \App\User::all();
        return \View::make('backend.admin', compact('staffs', 'suppliers', 'users'));
    }


    /**
     * Ajax route for finding users through form input
     *
     * @return array in json with emails
     */
    public function search()
    {
        //if (\Request::ajax()) {
        $result = [];
        if (\Input::has('add_staff')) {
            $input = \Input::get('add_staff');
            $users = User::where('email', 'LIKE', '%' . $input . '%')
                ->where('staff', '!=', 1)
                ->orderBy('email')
                ->take(5)
                ->get();
            if ($users) {
                foreach ($users as $user) {
                    $result[$user->id] = $user->email;
                }
            }
            return \Response::json($result, 200);
        }
        if (\Input::has('add_supplier')) {
            $input = \Input::get('add_supplier');
            $users = User::where('email', 'LIKE', '%' . $input . '%')
                ->where('supplier', '!=', 1)
                ->orderBy('email')
                ->take(5)
                ->get();
            if ($users) {
                foreach ($users as $user) {
                    $result[$user->id] = $user->email;
                }
            }
            return \Response::json($result, 200);
        }
        //}
    }

    /*
    * add somebody staff rights
    */
    public function addStaff()
    {
        $user = User::where('id', \Input::get('id'))->first();
        $user->staff = true;
        $user->save();

        return Redirect()->back();
    }

    /*
    * remove somebody staff rights
    */
    public function removeStaff()
    {
        $user = User::where('id', \Input::get('id'))->first();
        $user->staff = false;
        $user->save();
        return Redirect()->back();
    }

    /*
     * add somebody supplier rights
     */
    public function addSupplier()
    {
        $user = User::where('id', \Input::get('id'))->first();
        $user->supplier = true;

        // save picture
        $img = Image::make('img/upload/supplier/default.jpg');
        $img->save('img/upload/supplier/supplier'.$user->id.'.jpg', 80);

        $user->save();
        return Redirect()->back();
    }

    /*
     * add somebody supplier rights
     */
    public function removeSupplier()
    {
        $user = User::where('id', \Input::get('id'))->first();
        $user->supplier = false;
        $user->save();
        return Redirect()->back();
    }

    /**
     * Delete a user account
     *
     * @param  int $id
     * @return View
     */
    public function destroy()
    {
        $user = User::where('id', \Input::get('id'))->first();
        $confirmation = 'The account of ' . $user->name . ' got removed.';
        $user->delete();
        return Redirect()->back();
    }
}

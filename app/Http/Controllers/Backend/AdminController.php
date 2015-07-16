<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class AdminController extends Controller {

	public function __construct (){
		$this->middleware('staff');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$admins = \App\User::where('staff', true)->get();
		$suppliers = \App\User::where('supplier', true)->get();
		return \View::make('backend.admin', compact('admins', 'suppliers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		$user = \App\User::find($id);
		$confirmation = 'The account of '.$user->name.' got removed.';
		$user->delete();

		$admins = \App\User::where('staff', true)->get();
		$suppliers = \App\User::where('supplier', true)->get();
		return \View::make('backend.admin', compact('confirmation', 'admins', 'suppliers'));
	}

    public function search (){
        $result = [];
        if (\Input::has('add_backend_user')) {
            $input = \Input::get('add_backend_user');
            $users = User::where('email', 'LIKE', '%' . $input . '%')
                ->where('staff', '!=', 1)
                ->orderBy('email')
                ->take(5)
                ->get();
            if ($users) {
                foreach ($users as $user) {
                    array_push($result, $user->email);
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
                    array_push($result, $user->email);
                }
            }
            return \Response::json($result, 200);
        }
    }
}

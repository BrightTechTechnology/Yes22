<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Article;

class FrontendController extends Controller
{

    public function __construct ()
    {
        $language = $this->getLanguage();
        \App::setLocale($language);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $suppliers = User::where('supplier', true)->get();
        $articles = Article::where('active', true)->take(5)->orderBy('id', 'desc')->get();
        return view('frontend.suppliers', compact('suppliers', 'articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('frontend.signup');
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
        $supplier = User::where('id', $id)->first();
        return view('frontend.supplierProfile', compact('supplier'));
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
        //
    }

    public function getLanguage()
    {
        // language settings from cookie
        if (\Cookie::has('lang')) {
            $language = \Cookie::get('lang');
        }

        // language settings from selection
        if (
            (\Input::get('lang') == 'de') ||
            (\Input::get('lang') == 'en') ||
            (\Input::get('lang') == 'hk') ||
            (\Input::get('lang') == 'tw')
        ) {
            \Cookie::queue('lang', \Input::get('lang'), 60*24*365);
            $language = \Input::get('lang');
        }

        // language settings if neither cookies nor selection
        if (!isset($language)) {
            $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
            switch ($lang) {
                case "zh":
                    $language = "hk";
                    break;
                case "de":
                    $language = "de";
                    break;
                default:
                    $language = "en";
                    break;
            }
        }

        return $language;
    }
}

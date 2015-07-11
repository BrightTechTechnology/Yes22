<?php

namespace App\Http\Controllers;

use App\Rating;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Article;

class FrontendController extends Controller
{

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

    public function forwardShow($username)
    {
        $supplier = \App\User::where('username', '=', $username)->first();
        if ($supplier->supplier == true) {
            return $this->show($supplier->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        // data for rating JS
        $ratingDisplay['item'] = 'supplier';
        $ratingDisplay['item_id'] = $id;

        $ratingDisplay['user_id'] = '';
        $ratingDisplay['activated'] = 'false';
        if (\Auth::check()) {
            $ratingDisplay['activated'] = 'true';
            $ratingDisplay['user_id'] = \Auth::user()->id;
        }

        // calculate score
        $ratings = Rating::where('item_id', $id)->where('item', 'supplier')->get();
        $ratingSum = 0;
        $ratingCount = 0;
        foreach ($ratings as $rating) {
            $ratingSum = $ratingSum + $rating->score;
            $ratingCount = $ratingCount + 1;
        }
        if ($ratingCount > 0) {
            $ratingScore = $ratingSum / $ratingCount;
            $ratingDisplay['scoreInteger'] = round($ratingScore, 0);
            $ratingDisplay['scorePoint'] = number_format(round($ratingScore, 1), 1);
            $ratingDisplay['scoreVotes'] = $ratingCount;
        } else {
            $ratingDisplay['scoreInteger'] = 0;
            $ratingDisplay['scorePoint'] = '0.0';
            $ratingDisplay['scoreVotes'] = '0.0';
        }

        $supplier = User::where('id', $id)->first();
        if ($supplier != null) {
            return view('frontend.supplierProfile', compact('supplier', 'ratingDisplay'));
        }

        abort(404, 'cannot find supplier');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

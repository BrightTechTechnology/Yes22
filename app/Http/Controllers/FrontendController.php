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
     * show signup page
     *
     * @return Response
     */
    public function showSignup()
    {
        return view('frontend.signup');
    }

    /**
     * show list of all supppliers
     *
     * @return Response
     */
    public function showSuppliers()
    {
        $suppliers = User::where('supplier', true)->get();
        $articles = Article::where('active', true)->take(5)->orderBy('id', 'desc')->get();
        return view('frontend.suppliers', compact('suppliers', 'articles'));
    }

    /**
     * show specific suppplier.
     *
     * @param  int $id
     * @return Response
     */
    public function showSupplier($id)
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

    public function showSocialLogin (){
        return view('frontend.socialLogin');
    }


    public function forwardShowSupplier($username)
    {
        $supplier = \App\User::where('username', '=', $username)->first();
        if ($supplier->supplier == true) {
            return $this->showSupplier($supplier->id);
        }
    }

}

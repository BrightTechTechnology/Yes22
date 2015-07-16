<?php

namespace App\Http\Controllers;

use App\Rating;

use App\Http\Requests;
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
        $viewStrings = [
            'cta' => 'Get you first free thing',
        ];
        return view('frontend.signup', $viewStrings);
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
        $ratingDisplay = $this->getRatingData('supplier', $id);

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
        if ($supplier) {
            return $this->showSupplier($supplier->id);
        }
    }

    public function getRatingData($item, $itemId)
    {
        $ratingData = [];
        $ratingData['item'] = $item;
        $ratingData['itemId'] = $itemId;

        $ratingData['userId'] = '';
        $ratingData['activated'] = 'false';
        if (\Auth::check()) {
            $ratingData['activated'] = 'true';
            $ratingData['userId'] = \Auth::user()->id;
        }

        // calculate score
        $ratings = Rating::where('item_id', $itemId)->where('item', $item)->get();
        $ratingSum = 0;
        $ratingCount = 0;
        foreach ($ratings as $rating) {
            $ratingSum = $ratingSum + $rating->score;
            $ratingCount = $ratingCount + 1;
        }
        if ($ratingCount > 0) {
            $ratingScore = $ratingSum / $ratingCount;
            $ratingData['scoreInteger'] = round($ratingScore, 0);
            $ratingData['scorePoint'] = number_format(round($ratingScore, 1), 1);
            $ratingData['scoreVotes'] = $ratingCount;
        } else {
            $ratingData['scoreInteger'] = 0;
            $ratingData['scorePoint'] = '0.0';
            $ratingData['scoreVotes'] = '0.0';
        }

    return $ratingData;
    }
}

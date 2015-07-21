<?php

namespace App\Http\Controllers\Themes\Whitelabel;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Article;
use App\Rating;
/**
 * Class PageController
 * @package App\Http\Controllers\Themes\Whitelabel
 *
 * all routes for the Whitelabel sites
 */

class PageController extends Controller
{
    public function index()
    {
        // just forward to signup page on index
        return $this->signup();
    }

    public function fallback($method)
    {
        // show supplier in case no specific page exists
        $supplier = \App\User::where('username', '=', $method)->where('supplier','=', 1)->first();

        if ($supplier) {
            // data for rating JS
            // $ratingDisplay = $this->getRatingData('supplier', $id);

            $data = [
                'title' =>          'This is the supplier '.$supplier->officialname.' | Whitelabel',
                'supplier' =>       $supplier,
                'ratingDisplay' =>  $this->getRatingData('supplier', $supplier->id),
            ];

            return view($this->getViewName(), $data);
        }

        abort(404, 'Cannot find page');
    }

    /**
     * signup page
     *
     * @return \Illuminate\View\View
     */
    public function signup()
    {
        $data = [
            'title' =>              'This is the signup page | Whitelabel',
            'headline' =>           'This is the headline',
            'callToAction' =>       'Buy now',
            'subHeadline' =>        'Some description',
            'subSubHeadline' =>     trans('signup.slogan'),
            'articleText' =>        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',

            'productImageUrl' =>       '/img/product-thumb.png',

            'testimonials' =>       [
                                        [
                                            'text' => 'Great website have recommended to family and friends',
                                            'author' => 'Shereen A',
                                            'time' => \Carbon\Carbon::today()->formatLocalized('%A %d %B %Y'),
                                            'rating' => 5,
                                        ],
                                        [
                                            'text' => 'Great website have recommended to family and friends',
                                            'author' => 'Shereen A',
                                            'time' => \Carbon\Carbon::today()->formatLocalized('%A %d %B %Y'),
                                            'rating' => 5,
                                        ],
                                        [
                                            'text' => 'Great website have recommended to family and friends',
                                            'author' => 'Shereen A',
                                            'time' => \Carbon\Carbon::yesterday()->formatLocalized('%A %d %B %Y'),
                                            'rating' => 4,
                                        ]
                                    ],
        ];

        return view($this->getViewName(), $data);
    }

    /**
     * supplier overview
     *
     * @return \Illuminate\View\View
     */
    public function suppliers()
    {
        $data = [
            'title' =>      'This is the supplier overview | Whitelabel',
            'suppliers' =>  User::where('supplier', true)->get(),
        ];

        return view($this->getViewName(), $data);
    }


    /**
     * article overview
     *
     * @return \Illuminate\View\View
     */
    public function articles()
    {
        $data = [
            'title' =>      'This is the articlee overview | Whitelabel',
            'articles' =>   Article::where('active', true)->take(5)->orderBy('id', 'desc')->get(),
        ];

        return view($this->getViewName(), $data);
    }


    // todo: put into Trait
    protected function getViewName ()
    {
        $NameSpacePieces = explode('\\', __NAMESPACE__);
        $theme = lcfirst(end($NameSpacePieces));
        $route = debug_backtrace()[1]['function'];

        $viewName = 'themes'.'.'.$theme.'.'.$route;
        return $viewName;
    }

    // todo: put into sensible place, model maybe?
    protected function getRatingData($item, $itemId)
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
            $ratingData['scoreVotes'] = '0';
        }

        return $ratingData;
    }

}

<?php

namespace App\Http\Controllers\Themes\Gotarot;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Article;
use App\Rating;
/**
 * Class PageController
 * @package App\Http\Controllers\Themes\Gotarot
 *
 * all routes for the Gotarot sites
 */

class PageController extends Controller
{

    //////////////////// UNIVERSAL METHODS FOR EVERY THEME ////////////////////

    public function __construct()
    {
        $this->middleware('auth', ['only'=>['profile','postBilling']]);
    }

    protected function getViewName ()
    {
        $NameSpacePieces = explode('\\', __NAMESPACE__);
        $theme = lcfirst(end($NameSpacePieces));
        $route = debug_backtrace()[1]['function'];

        $viewName = 'themes'.'.'.$theme.'.'.$route;
        return $viewName;
    }

    public function index()
    {
        // just forward to signup page on index
        return $this->signup();
    }

    public function fallback($method)
    {
        // show supplier in case no specific page exists
        $supplier = \App\User::where('username', '=', $method)
            ->where('supplier','=', 1)
            ->where('theme','=', 'gotarot')
            ->first();

        if ($supplier) {
            // data for rating JS
            $rating = new Rating;
            $ratingDisplay = $rating->getRatingData('gotarot', 'supplier', $supplier->id);

            $data = [
                'title' =>          'This is the supplier '.$supplier->officialname.' | Gotarot',
                'supplier' =>       $supplier,
                'ratingDisplay' =>  $ratingDisplay,
            ];

            return view($this->getViewName(), $data);
        }

        abort(404, 'Cannot find page');
    }

    //////////////////// PROFILE GET & POST HANDLING ////////////////////

    public function profile($id = 'index', $subId = false)
    {
        $viewPath = $this->getViewName().'/'.$id;

        if (\Request::isMethod('get') && \View::exists($viewPath)) {
            return view($this->getViewName().'/'.$id);
        }

        if (\Request::isMethod('post')) {
            $controllerName = 'App\Http\Controllers\\'.ucfirst($id).'Controller';
            $methodName = 'post'.ucfirst($id);

            $controller = new $controllerName;
            return $controller->$methodName();
        }
        abort(404, 'Cannot find page');
    }

    //////////////////// FRONTEND PAGES ////////////////////

    /**
     * signup page
     *
     * @return \Illuminate\View\View
     */
    public function signup()
    {
        $data = [
            'title' =>              'This is the signup page | Gotarot',
            'headline' =>           'This is the headline',
            'callToAction' =>       'Buy now',
            'subHeadline' =>        'Some description',
            'subSubHeadline' =>     trans('signup.slogan'),
            'articleText' =>        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',

            'productImageUrl' =>       '/img/gotarot/product-thumb.png',

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
            'title' =>      'This is the supplier overview | Gotarot',
            'suppliers' =>  User::where('supplier', true)
                ->where('theme','=', 'gotarot')
                ->get(),
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
            'title' =>      'This is the article overview | Gotarot',
            'articles' =>   Article::where('active', true)
                ->where('theme','=', 'gotarot')
                ->orderBy('id', 'desc')
                ->take(5)
                ->get(),
        ];

        return view($this->getViewName(), $data);
    }

    /**
     * shhow one article
     *
     * @return \Illuminate\View\View
     */
    public function article($id)
    {
        $data = [
            'title' =>     'This is article with id '.$id.' | Gotarot',
            'article' =>   Article::where('active', true)
                ->where('id', $id)
                ->where('theme','=', 'gotarot')
                ->first(),
        ];

        return view($this->getViewName(), $data);
    }

}

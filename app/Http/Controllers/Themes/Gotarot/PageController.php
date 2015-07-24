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

    public function index($data = [])
    {
        if ( $data == []) {
            $data = [
                'title' => 'Welcome! | Gotarot',
                'pages' => [
                    'Splash' => 'splash',
                    'Menue' => 'menu',
                    'About us' => 'about',
                    'Our Services' => 'services',
                    // 'blog',
                    // 'portfolio',
                    // 'gallery',
                    // 'videos',
                    // 'clients',
                    // 'twitter',
                    // 'contact',
                ],
            ];
        }
        return view($this->getViewName(), $data);
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
            'title' => 'Welcome! | Gotarot',
            'pages' => [
                'gallery' => 'gallery',
            ],
        ];

        return $this->index($data);
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
     * show one article
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

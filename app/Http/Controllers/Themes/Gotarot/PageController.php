<?php

namespace App\Http\Controllers\Themes\Gotarot;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Controllers\DataController;
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

    protected $dataController;

    //////////////////// UNIVERSAL METHODS FOR EVERY THEME ////////////////////

    public function __construct()
    {
        $this->middleware('auth', ['only'=>[]]);
        $this->dataController = new DataController;
    }

    protected function getViewName ($template = 'index')
    {
        $NameSpacePieces = explode('\\', __NAMESPACE__);
        $theme = lcfirst(end($NameSpacePieces));

        $viewName = 'themes'.'.'.$theme.'.'.$template;
        return $viewName;
    }


    public function fallback($method)
    {
        $this->index();
    }


    //////////////////// FRONTEND PAGES ////////////////////

    public function index(){
        $data = [
            'title' => 'Welcome! | Gotarot',
            'pages' => [
                'Splash' => 'splash',
                'Menu' => 'menu',
                'About us' => 'about',
                'Our Services' => 'services',
                'Blog' => 'blog',
                'Proftfolio' => 'portfolio',
                'Gallery' => 'gallery',
                'Videos' => 'videos',
                'Clients' => 'clients',
                'Twitter' => 'twitter',
                'Contact' => 'contact',
            ],
        ];
        return view($this->getViewName(), $data);
    }

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
                'Splash' => 'splash',
                'Signup' => 'signup',
            ],
        ];
        return view($this->getViewName(), $data);
    }

    /**
     * suppliers page
     *
     * @return \Illuminate\View\View
     */
    public function suppliers()
    {
        $suppliers = $this->dataController->suppliers(9);
        $data = [
            'title' => 'Suppliers! | Gotarot',
            'pages' => [
                'Menu' => 'menu',
                'Suppliers' => $suppliers,
            ],
        ];
        return view($this->getViewName('suppliers'), $data);
    }
}

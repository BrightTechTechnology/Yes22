<?php

namespace App\Http\Controllers\Themes\Gotarot;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DataController;
use App\Rating;
use App\Http\Controllers\PageControllerInterface;
use App\Http\Controllers\BillingController;

/**
 * Class PageController
 * @package App\Http\Controllers\Themes\Gotarot
 *
 * all routes for the Gotarot sites
 */

class PageController extends Controller implements PageControllerInterface
{

    protected $dataController;

    //////////////////// UNIVERSAL METHODS FOR EVERY THEME ////////////////////

    public function __construct()
    {
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
        // show supplier in case no specific page exists
        $supplier = $this->dataController->supplier($method);

        if ($supplier) {
            // data for rating JS
            $rating = new Rating;
            $ratingDisplay = $rating->getRatingData('supplier', $supplier->id);

            $data = [
                'title' => 'This is the supplier ' . $supplier->name . ' | GoTarot',
                'supplier' => $supplier,
                'ratingDisplay' => $ratingDisplay,
            ];

            return view($this->getViewName('supplier'), $data);
        }

        return $this->index();
    }

    // forward to the following if already logged in
    public function authenticated()
    {
        if (\Auth::check()) {
            if (\Auth::user()->isStaff()) {
                return redirect()->to('/backend');
            }
            elseif (\Auth::user()->isSupplier()) {
                return redirect()->to('/supplier');
            }
            else {
                return redirect()->to('/suppliers');
            }
        }

        return redirect()->to('/');
    }


    //////////////////// FRONTEND PAGES ////////////////////

    public function index(){
        $data = [
            'title' => 'Welcome! | Gotarot',
            'blade' => debug_backtrace()[0]['function'],
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
        return view($this->getViewName(debug_backtrace()[0]['function']), $data);
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
            'blade' => debug_backtrace()[0]['function'],
            'pages' => [
                'Menu' => 'menu',
                'Suppliers' => $suppliers,
            ],
        ];
        return view($this->getViewName(debug_backtrace()[0]['function']), $data);
    }

    /**
     * suppliers page
     *
     * @return \Illuminate\View\View
     */
    public function billing()
    {

    if (\Request::isMethod('post')) {
        $billing = new BillingController;
        return $billing->postBilling();
    }

    $data = [
        'title' => 'Billing | Gotarot',
        'blade' => debug_backtrace()[0]['function'],
        'pages' => [
            'Billing' => 'billing',
        ],
    ];

    return view($this->getViewName(debug_backtrace()[0]['function']), $data);
    }



}

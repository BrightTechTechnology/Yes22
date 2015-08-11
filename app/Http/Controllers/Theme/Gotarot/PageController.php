<?php

namespace App\Http\Controllers\Theme\Gotarot;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DataController;
use App\Invoice;
use App\Rating;
use App\Http\Controllers\PageControllerInterface;
use App\Http\Controllers\BillingController;

/**
 * Class PageController
 * @package App\Http\Controllers\Theme\Gotarot
 *
 * all routes for the Gotarot sites
 */

class PageController extends Controller implements PageControllerInterface
{

    public function __construct()
    {
        $this->dataController = new DataController;
    }

    protected $dataController;

    //////////////////// UNIVERSAL METHODS FOR EVERY THEME ////////////////////

    protected function getViewName ($template = 'index')
    {
        $NameSpacePieces = explode('\\', __NAMESPACE__);
        $theme = lcfirst(end($NameSpacePieces));

        $viewName = 'theme'.'.'.$theme.'.'.$template;
        return $viewName;
    }

    public function tester(){
        return 'hi';
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


    // forward to the following
    //  => after login or...
    //  => if filtered because not authenticated

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
        if ($this->noGuestAllowed()){
            return $this->noGuestAllowed();
        }

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
     * billing page
     *
     * @return \Illuminate\View\View
     */
    public function billing()
    {
        if ($this->noGuestAllowed()){
            return $this->noGuestAllowed();
        }

        if (\Request::isMethod('post')) {
            $billing = new BillingController;
            return $billing->postBilling();
        }

        $invoices = Invoice::where('user_id', \Auth::user()->id)->get();

        $data = [
            'title' => 'Billing | Gotarot',
            'blade' => debug_backtrace()[0]['function'],
            'invoices' => $invoices,
            'pages' => [
                'Menu' => 'menu',
                'Credit Cards' => 'creditcard',
                'Invoices' => 'invoices',
            ],
        ];

        return view($this->getViewName(debug_backtrace()[0]['function']), $data);
    }



}

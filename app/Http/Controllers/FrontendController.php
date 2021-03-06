<?php

namespace App\Http\Controllers;

use App\Http\Requests;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 *
 * Takes care of global methods that are one level above the specific theme
 *  but NOT model specific
 *  but NOT problem specific
 */
class FrontendController extends Controller
{
    protected $config;

    public function __construct(ConfigController $config)
    {
        $this->config = $config;
    }

    /**
     * forwards to current theme
     * @return \Illuminate\Http\RedirectResponse
     */
    public function routeForward($method = 'index', $id = false, $subId = false)
    {

        //special case: if any auth controller etc forwards to home -> forward to index
        if ($method == 'home') {
            $method = 'index';
        }

        // get data for forwarding
        $theme = $this->config->getTheme();
        $theme = ucfirst($theme);
        $pageControllerPath = '\App\Http\Controllers\Theme\\'.$theme.'\PageController';
        $pageController = new $pageControllerPath;



        // check if page exists in theme, otherwise run fallback
        if (method_exists($pageController, $method)){
            if ($id){
                $result = $pageController->$method($id);
            } else {
                $result = $pageController->$method();
            }
        } else {
            $result = $pageController->fallback($method);
        }

        return $result;
    }
}

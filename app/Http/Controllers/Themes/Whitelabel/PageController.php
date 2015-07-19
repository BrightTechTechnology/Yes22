<?php

namespace App\Http\Controllers\Themes\Whitelabel;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        return $this->signup();
    }

    public function signup()
    {
        $data = [
            'title' =>              'This is the title | Whitelabel',
            'headline' =>           'This is the headline',
            'callToAction' =>       'Buy now',
            'subHeadline' =>        'Some description',
            'subSubHeadline' =>     trans('signup.slogan'),
        ];

        $template = $this->getViewName();
        return view($template, $data);
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
}

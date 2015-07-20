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
            'articleText' =>        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',

            'productImageUrl' =>       '/img/product-thumb.png',

            'testimonials' =>       [
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
                                        'rating' => 5,
                                    ],
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

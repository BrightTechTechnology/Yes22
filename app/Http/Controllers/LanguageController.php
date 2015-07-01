<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function getLanguage()
    {
        // language settings from cookie
        if (\Cookie::has('lang')) {
            $language = \Cookie::get('lang');
        }

        // language settings from selection
        if (
            (\Input::get('lang') == 'de') ||
            (\Input::get('lang') == 'en') ||
            (\Input::get('lang') == 'hk') ||
            (\Input::get('lang') == 'tw')
        ) {
            \Cookie::queue('lang', \Input::get('lang'), 60*24*365);
            $language = \Input::get('lang');
        }

        // language settings if neither cookies nor selection
        if (!isset($language)) {
            $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
            switch ($lang) {
                case "zh":
                    $language = "hk";
                    break;
                case "de":
                    $language = "de";
                    break;
                default:
                    $language = "en";
                    break;
            }
        }

        return $language;
    }
}

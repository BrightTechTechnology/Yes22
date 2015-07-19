<?php

namespace App\Http\Controllers;

use App\Http\Requests;

/*
 *  Methods to get and set language and theme
 */

class ConfigController extends Controller
{
    /**
     * is run through middleware language
     *
     * @return string language
     */
    public function getLanguage()
    {
        // language settings from input
        if (
            (\Input::get('lang') == 'de') ||
            (\Input::get('lang') == 'en') ||
            (\Input::get('lang') == 'hk') ||
            (\Input::get('lang') == 'tw')
        ) {
            $language = \Input::get('lang');
        }

        // language settings from cookie
        if (!isset($language)) {
            if (\Cookie::has('lang')) {
                $language = \Cookie::get('lang');
            }
        }

        // language settings from browser
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

    public function setLanguage($language)
    {
        \Cookie::queue('lang', $language, 60*24*365);
        \App::setLocale($language);
    }




    /**
     * is run through middleware theme
     *
     * @return string theme
     */

    public function getTheme()
    {
        // TODO: Reomve this option in production
        // theme settings from input
        $allThemes = ['whitelabel', 'gotarot', 'first1'];
        if (in_array(\Input::get('theme') , $allThemes)){
            $theme = \Input::get('theme');
        }

        // theme settings from cookie
        if (!isset($theme)) {
            if (\Cookie::has('theme')) {
                $theme = \Cookie::get('lang');
            }
        }

        // $theme setting from url
        if (!isset($theme)) {
            $baseUrl = \URL::to('/');
            switch ($baseUrl) {
                case 'gotarot.com.hk':
                    $theme = 'gotarot';
                    break;
                case 'gotarot.hk':
                    $theme = 'gotarot';
                    break;
                default:
                    $theme = 'whitelabel';
                    break;
            }
        }

        return $theme;
    }

    public function setTheme($theme)
    {
        \Cookie::queue('theme', $theme, 60 * 24 * 365);
    }

}

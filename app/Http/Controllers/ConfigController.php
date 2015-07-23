<?php

namespace App\Http\Controllers;

use App\Http\Requests;

/*
 *  Get and set language
 *  Get theme
 */

class ConfigController extends Controller
{
    protected $themeOverwrite = 'Gotarot'; // use only for development when theme is not determined by domain

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
     * get the currently active theme
     *
     * @return string theme
     */

    public function getTheme()
    {
        if (isset($this->themeOverwrite)) {
            $theme = $this->themeOverwrite;
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
                case 'first1.com':
                    $theme = 'first1';
                    break;
                default:
                    $theme = 'whitelabel';
                    break;
            }
        }

        $theme = lcfirst($theme);

        return $theme;
    }

    public function setTheme($theme)
    {
        // nothing yet. maybe need to filter DB queries etc
    }

}

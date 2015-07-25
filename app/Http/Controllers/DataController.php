<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ConfigController;
use App\User;

class DataController extends Controller
{
    protected $config;

    public function __construct()
    {
        $this->config = new ConfigController;
    }

    public function suppliers ($limit)
    {
        $theme = $this->config->getTheme();
        return User::where('supplier', true)
            ->where('theme','=', $theme)
            ->take($limit)
            ->get()->toArray();
    }
}

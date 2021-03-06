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

    public function suppliers ($limit = 100000)
    {
        $theme = $this->config->getTheme();
        return User::where('supplier', true)
            ->where('theme','=', $theme)
            ->take($limit)
            ->get()
            ->toArray();
    }

    public function supplier ($name)
    {
        $theme = $this->config->getTheme();
        return User::where('name', '=', $name)
            ->where('theme','=', $theme)
            ->where('supplier','=', 1)
            ->first();
    }
}

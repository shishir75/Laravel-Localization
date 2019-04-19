<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function index()
    {
        //Session::put('locale', $locale);

        return view('page');
    }

    public function lang($locale = 'en')
    {
        Session::put('locale', $locale);

        return view('page');
    }
}

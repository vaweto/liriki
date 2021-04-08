<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        if ($lang ===  'el' || $lang === 'en') {
            Session::put('applocale', $lang);
            Session::put('locale', $lang);
        }
        return Redirect::back();
    }
}

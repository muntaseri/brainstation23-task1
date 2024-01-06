<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    // to load static page app2
    public function showStaticPage()
    {
        return view('app2');
    }
}

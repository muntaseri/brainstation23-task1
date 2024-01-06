<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function showStaticPage()
    {
        return view('app1');
    }
}

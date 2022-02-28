<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SplashscreenController extends Controller
{
    public function index()
    {
        return view('pages.splashscreen');
    }
}
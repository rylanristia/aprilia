<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeverseController extends Controller
{
    public function index()
    {
        return view('pages.weverse');
    }
}
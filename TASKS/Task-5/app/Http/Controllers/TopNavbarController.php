<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopNavbarController extends Controller
{
    public function index()
    {
        return view('pages.layout.top-nav');
    }
}

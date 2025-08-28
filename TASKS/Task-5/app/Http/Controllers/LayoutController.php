<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function topnav()
    {
        return view('pages.layout.top-nav'); 
    }

    public function boxed()
    {
        return view('pages.layout.boxed'); 
    }

    public function fixed()
    {
        return view('pages.layout.fixed'); 
    }

    public function collapsed()
    {
        return view('pages.layout.collapsed-sidebar'); 
    }
}
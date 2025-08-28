<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Use translation key or static string
        $title = __('messages.home_title');
        return view('home', compact('title'));
    }
}

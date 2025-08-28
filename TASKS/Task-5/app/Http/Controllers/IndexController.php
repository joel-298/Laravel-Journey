<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $title = __('app.home_title');
        return view('index', compact('title'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IconController extends Controller
{
    public function index()
    {
        return view('pages.UI.icons');
    }
}

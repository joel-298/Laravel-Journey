<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ButtonController extends Controller
{
    public function index()
    {
        return view('pages.UI.buttons');
    }
}

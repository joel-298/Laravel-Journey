<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoxedController extends Controller
{
    public function index()
    {
        return view('pages.layout.boxed');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollapsedController extends Controller
{
    public function index()
    {
        return view('pages.layout.collapsed-sidebar');
    }
}

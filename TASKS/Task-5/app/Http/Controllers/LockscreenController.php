<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LockscreenController extends Controller
{
    public function index()
    {
        return view('pages.examples.lockscreen');
    }
}
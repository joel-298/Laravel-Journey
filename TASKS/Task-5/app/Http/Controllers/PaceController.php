<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaceController extends Controller
{
    public function index()
    {
        return view('pages.examples.pace');
    }
}
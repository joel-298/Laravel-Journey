<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InlineController extends Controller
{
    public function index()
    {
        return view('pages.charts.inline');
    }
}
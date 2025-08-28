<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index2Controller extends Controller
{
    public function index()
    {
        $title = __('app.dashboard_v2_title');
        return view('index2', compact('title'));
    }
}

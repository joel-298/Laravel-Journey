<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = __('messages.about_title');
        return view('about', compact('title'));
    }
}

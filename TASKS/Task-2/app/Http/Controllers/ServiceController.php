<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $title = __('messages.services_title');
        return view('services', compact('title'));
    }
}

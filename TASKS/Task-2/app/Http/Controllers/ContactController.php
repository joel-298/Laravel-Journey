<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $title = __('messages.contact_title');
        return view('contact', compact('title'));
    }
}

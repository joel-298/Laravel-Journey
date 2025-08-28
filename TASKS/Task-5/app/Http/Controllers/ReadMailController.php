<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadMailController extends Controller
{
    public function index()
    {
        return view('pages.mailbox.read-mail');
    }
}

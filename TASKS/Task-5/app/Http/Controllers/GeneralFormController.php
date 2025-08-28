<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralFormController extends Controller
{
    public function index()
    {
        return view('pages.forms.general');
    }
}
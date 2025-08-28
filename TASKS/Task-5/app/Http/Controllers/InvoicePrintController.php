<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoicePrintController extends Controller
{
    public function index()
    {
        return view('pages.examples.invoice-print');
    }
}

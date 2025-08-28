<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
	 * Show the home page.
	 *
	 * @return view()
	 * @author Sandeep Rawat
	 */
    public function index()
    {
        $title = __('messages.home_title');
        return view('home', compact('title'));
    }
}

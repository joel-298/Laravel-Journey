<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
	 * Show the service page.
	 *
	 * @return view()
	 * @author Sandeep Rawat
	 */
    public function index()
    {
        $title = __('messages.services_title');
        return view('services', compact('title'));
    }
}

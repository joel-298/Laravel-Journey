<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    /**
	 * Show the doctors page.
	 *
	 * @return view()
	 * @author Sandeep Rawat
	 */
    public function index()
    {
        $title = __('messages.doctors_title');
        return view('doctors', compact('title'));
    }
}

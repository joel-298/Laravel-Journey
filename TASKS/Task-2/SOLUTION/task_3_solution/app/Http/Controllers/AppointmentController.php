<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
	 * Show the appointment page.
	 *
	 * @return view()
	 * @author Sandeep Rawat
	 */
    public function index()
    {
        return view('appointment');
    }
}

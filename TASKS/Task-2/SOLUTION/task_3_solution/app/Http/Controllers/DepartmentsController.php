<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    /**
	 * Show the departments page.
	 *
	 * @return view()
	 * @author Sandeep Rawat
	 */
    public function index()
    {
        $title = __('messages.departments_title');
        return view('departments', compact('title'));
    }
}

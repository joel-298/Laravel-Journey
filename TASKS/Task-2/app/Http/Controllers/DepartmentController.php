<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $title = __('messages.departments_title');
        return view('departments', compact('title'));
    }
}

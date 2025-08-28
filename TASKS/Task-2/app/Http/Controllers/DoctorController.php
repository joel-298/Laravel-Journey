<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $title = __('messages.doctors_title');
        return view('doctors', compact('title'));
    }
}

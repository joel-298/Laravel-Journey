<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartjsController extends Controller
{
    public function index()
    {
        return view('pages.charts.chartjs'); // resources/views/pages/charts/chartjs.blade.php
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Generic renderer for nested page views under resources/views/pages.
     *
     * Examples:
     *  - pages('widgets') => resources/views/pages/widgets.blade.php
     *  - pages('charts.chartjs') => resources/views/pages/charts/chartjs.blade.php
     */
    public function pages(string $path): View
    {
        return view('pages.' . $path);
    }
}



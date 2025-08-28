<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Collection;

class ExportController extends Controller
{
    public function export()
    {
        // Static data defined here
        $data = collect([
            ['Name', 'Email', 'Country'],
            ['John Doe', 'john@example.com', 'USA'],
            ['Jane Smith', 'jane@example.com', 'UK'],
            ['Alex Brown', 'alex@example.com', 'Canada'],
        ]);

        return Excel::download(new UsersExport($data), 'users.csv', \Maatwebsite\Excel\Excel::CSV);
    }
}

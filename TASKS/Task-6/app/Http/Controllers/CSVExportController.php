<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class CSVExportController extends Controller
{
    public function exportCSV(): StreamedResponse
    {
        $fileName = 'sample.csv';

        // Static reference data (for practice)
        $data = [
            ['Name', 'Email', 'Country'], // Header row
            ['John Doe', 'john@example.com', 'USA'],
            ['Jane Smith', 'jane@example.com', 'UK'],
            ['Alex Brown', 'alex@example.com', 'Canada'],
        ];

        // Create CSV response
        $response = new StreamedResponse(function () use ($data) {
            $handle = fopen('php://output', 'w');

            foreach ($data as $row) {
                fputcsv($handle, $row);
            }

            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="' . $fileName . '"');

        return $response;
    }
}
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CSVExportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/export-csv', [CSVExportController::class, 'exportCSV']);use App\Http\Controllers\ExportController;

Route::get('/export-users', [ExportController::class, 'export']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/departments', [DepartmentsController::class, 'index'])->name('departments');
Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment');

Route::get('/dropdown-1', function () {
    return view('dropdown-1');
})->name('dropdown-1');

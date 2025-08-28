<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/departments', function () {
    return view('departments');
})->name('departments');

Route::get('/doctors', function () {
    return view('doctors');
})->name('doctors');

Route::get('/dropdown-1', function () {
    return view('dropdown-1');
})->name('dropdown-1');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/appointment', function () {
    return view('appointment');
})->name('appointment');

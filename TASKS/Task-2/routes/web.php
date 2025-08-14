<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/appointment', function () {
    return view('appointment');
})->name('appointment');
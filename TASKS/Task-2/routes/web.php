<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;



Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/departments', [DepartmentController::class, 'index'])->name('departments');
Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment');
Route::get('/dropdown/1', [UserController::class, 'index'])->name('dropdown_1');
// Create
Route::get('/create', [PostController::class, 'create']);

// Read (all)
Route::get('/posts', [PostController::class, 'index']);

// Find by ID
Route::get('/post/{id}', [PostController::class, 'show']);

// Update
Route::get('/update/{id}', [PostController::class, 'update']);

// Delete
Route::get('/delete/{id}', [PostController::class, 'delete']);



require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



use App\Http\Controllers\UserController;                            // Import Controller
Route::get("users", [UserController::class, 'getAllUsers']) ; 
Route::get("user/{name}", [UserController::class,'getUserDetails']); // Passing variable from url to this function !

Route::get('/', function () {
    return view('welcome');
});
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function() {
    return view('home'); 
});
Route::get("/dynamicURL/{name}",function($name) {
    // echo $name ; 
    return view('dynamicURL',['name'=>$name]) ; 
});


/* REDIRECT */ 
Route::redirect("/home","/") ; /* REDIRECT FROM PARTICULAR PAGE TO A DIFFERENT ONE */ 
Route::fallback(function () {  /* FALL-BACK IN CASE OF RANDOM URLS */ 
    return redirect("/") ; 
}); 
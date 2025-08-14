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

Route::get('/home', function () {
    $array = [
        (object) ['id' => 1, 'name' => 'Alice', 'email' => 'alice@example.com', 'password' => 'secret1'],
        (object) ['id' => 2, 'name' => 'Bob', 'email' => 'bob@example.com', 'password' => 'secret2'],
        (object) ['id' => 3, 'name' => 'Charlie', 'email' => 'charlie@example.com', 'password' => 'secret3'],
        (object) ['id' => 4, 'name' => 'David', 'email' => 'david@example.com', 'password' => 'secret4'],
        (object) ['id' => 5, 'name' => 'Eve', 'email' => 'eve@example.com', 'password' => 'secret5'],
        (object) ['id' => 6, 'name' => 'Frank', 'email' => 'frank@example.com', 'password' => 'secret6'],
        (object) ['id' => 7, 'name' => 'Grace', 'email' => 'grace@example.com', 'password' => 'secret7'],
        (object) ['id' => 8, 'name' => 'Hank', 'email' => 'hank@example.com', 'password' => 'secret8'],
        (object) ['id' => 9, 'name' => 'Joel', 'email' => 'joel@example.com', 'password' => 'secret9'],
        (object) ['id' => 10, 'name' => 'Matthew', 'email' => 'matthew@example.com', 'password' => 'secret10'],
        (object) ['id' => 11, 'name' => 'Oscar', 'email' => 'oscar@example.com', 'password' => 'secret11'],    
        (object) ['id' => 12, 'name' => 'May', 'email' => 'may@example.com', 'password' => 'secret12'],
    ];
    return view('home', ['users' => $array]) ; 
});

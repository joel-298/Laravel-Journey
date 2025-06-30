<?php 

namespace App\Http\Controllers; 

use Illuminate\Http\Request ; 

class UserController extends Controller { 
    // 
    function getUserDetails($name) {
        return view('user', ['name' => $name]) ;
    }

    function getAllUsers() {
        return "List of all the users !" ; 
    }
}


?>
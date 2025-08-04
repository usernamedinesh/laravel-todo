<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; //for view exist or not 

class UserController extends Controller
{
    //normal function
    function getUser() {
        return "my name is dinesh";
    }
    function getNestedFolder() {
        // return view('admin.login');// admin is directory name
        if(view::exists('admin.login')) {
            return view('admin.login');
        }else {}
        echo "no view found";
    }

    //accept argument
    function getUserName($name) {
        return "my name is $name";
    }
    //call view 
    function getView($name) {
        // return view('home');
        return view('about', ['name' => $name]); // can do this too
    }
}

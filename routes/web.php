<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

// Route::get('/signup', function () {
//     return view('signup');
// });

Route::view("/signup", "signup"); // sort form 

//accepting an dynamice route and passing to page about
Route::get('/about/{name}',function($name) {
    return view('about', ['name'=>$name]);
});


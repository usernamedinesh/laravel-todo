<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// redirect
route::redirect('/welcome', '/'); // always /wecome goes to /
Route::get('user',[UserController::class, 'getUser'] ); // we can call controler like this
Route::get('user/{name}',[UserController::class, 'getUserName'] );
Route::get('aaa/{name}',[UserController::class, 'getView'] );
Route::get('/',[UserController::class, 'getHome'] );


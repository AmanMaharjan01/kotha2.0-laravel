<?php

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
    return view('frontpage');
});


Route::get('/rooms', function () {
    return view('room');
});


Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('singup');
});

Route::get('/create', function () {
    return view('create');
});





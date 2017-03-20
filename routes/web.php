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
    return view('index');
});

Route::get('/about', function () {
    return view('index2');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/searchresult', function () {
    return view('searchresult');
});


Route::get('/register', function () {
    return view('register');
});

Route::get('/inbox', function () {
    return view('inbox');
});

Route::get('/post/1', function () {
    return view('postdetail');
});

Route::get('/authenticate', function () {
    return view('authenticate');
});
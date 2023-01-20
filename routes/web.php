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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/products1', function () {
    return view('products1');
});

Route::get('/products2', function () {
    return view('products2');
});

Route::get('/products3', function () {
    return view('products3');
});

Route::get('/products4', function () {
    return view('products4');
});


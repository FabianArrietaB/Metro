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

/*Home*/

Route::get('/', function () {
    return view('home/home');

});

Route::get('/catalogo', function () {
    return view('home/productos');

});

Route::get('/info', function () {
    return view('home/info');

});

/*Autenticar*/

Route::get('/aut', function () {
    return view('auth/login');

});

/*Cart*/

Route::get('/cars', function () {
    return view('cart/cart');

});

/*Admin*/

Route::get('/viewadmin', function () {
    return view('admin/admin');

});

Route::get('/upcarrus', function () {
    return view('admin/subircarrusel');

});

Route::get('/upcatalogo', function () {
    return view('admin/subircatalogo');

});
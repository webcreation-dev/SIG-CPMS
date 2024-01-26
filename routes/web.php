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
    return view('landing');
});

Route::get('/lynia_locations', function () {
    return view('about.locations');
});

Route::get('/lynia_affiliates', function () {
    return view('about.lynia-affiliates');
});

Route::get('lynia_for_direct_sales', function () {
    return view('about.lynia-for-direct-sales');
});

Route::get('lynia_reviews', function () {
    return view('about.lynia-reviews');
});

Route::get('what_is_lynia', function () {
    return view('about.what-is-lynia');
});



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

Route::get('/account', function () {
    return view('account');
});

// PAGES FOR AUTHENTICATION

// PACKAGES EXPECTED

Route::get('/packages-delivered', function () {
    return view('auth.my-packages.packages-expected.delivered');
});

Route::get('/packages-groupings', function () {
    return view('auth.my-packages.packages-expected.groupings');
});

Route::get('/packages-in-transit', function () {
    return view('auth.my-packages.packages-expected.in-transit');
});

// PACKAGES IN WAREHOURSE

Route::get('/packages-action-required', function () {
    return view('auth.my-packages.packages-in-warehouse.action_required');
});

Route::get('/packages-in-progress', function () {
    return view('auth.my-packages.packages-in-warehouse.in-progress');
});

Route::get('/packages-ready-to-ship', function () {
    return view('auth.my-packages.packages-in-warehouse.ready-to-ship');
});

// PACKAGES SHIPPED

Route::get('/packages-add-ship', function () {
    return view('auth.my-packages.packages-shipped.add-packages');
});

// ASSISTED PURCHASE

Route::get('/purchase-articles', function () {
    return view('auth.my-packages.assisted-purchasing.add-articles');
});

Route::get('/purchase-add-articles', function () {
    return view('auth.my-packages.assisted-purchasing.new-achat');
});

// HELP LYNIA DELIVERY

Route::get('/help-getting-started', function () {
    return view('auth.lynia-delivery-help.getting-started');
});

Route::get('/lynia-university', function () {
    return view('auth.lynia-delivery-help.academy-lynia');
});


// ABOUT

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



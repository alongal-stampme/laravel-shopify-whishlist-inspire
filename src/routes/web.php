<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth.shopify'])->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name('home');

    Route::view('/products', 'products');
    Route::view('/customers', 'customers');
    Route::view('/settings', 'settings');

    Route::post('configureTheme', 'SettingController@configureTheme');

});

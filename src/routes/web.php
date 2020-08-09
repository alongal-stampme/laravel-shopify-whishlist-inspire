<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth.shopify'])->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name('home');

    Route::view('/products', 'products');
    Route::view('/customers', 'customers');
    Route::view('/settings', 'settings');

    Route::get('/test.json', function () {
        $shop = \Illuminate\Support\Facades\Auth::user();

        $shopApi = $shop->api()->rest('GET', '/admin/themes.json')['body'];

        return $shopApi;
    });

});

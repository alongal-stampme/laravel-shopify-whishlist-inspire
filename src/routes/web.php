<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth.shopify'])->name('home');

Route::get('/products', function () {
    return view('products');
})->middleware(['auth.shopify'])->name('products');

Route::get('/customers', function () {
    return view('customers');
})->middleware(['auth.shopify'])->name('customers');

Route::get('/settings', function () {
    return view('settings');
})->middleware(['auth.shopify'])->name('settings');

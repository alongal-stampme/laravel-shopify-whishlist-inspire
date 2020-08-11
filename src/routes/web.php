<?php

use Illuminate\Support\Facades\Route;


Route::middleware(['auth.shopify'])->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name('home');

    Route::view('/products', 'products');
    Route::view('/customers', 'customers');
    Route::view('/settings', 'settings');

    Route::get('/test', function () {
        $shop = \Illuminate\Support\Facades\Auth::user();

        $themes = $shop->api()->rest('GET', '/admin/themes.json');

        $activeThemeId = '';
        foreach ($themes['body']->container['themes'] as $theme) {
            if ($theme['role'] == 'main') {
                $activeThemeId = $theme['id'];
            }
        }

        $snippet = 'Your snippet code';
        $array = ['asset' => ['key' => 'snippets/codeinspire-wishlist-app.liquid', 'value' => $snippet]];
        $shop->api()->rest('PUT', '/admin/themes/' . $activeThemeId . '/assets.json', $array);

        return 'Success';
    });

});

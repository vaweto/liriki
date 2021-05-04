<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// Register Twill routes here eg.
 Route::module('events');
 Route::module('pages');
 Route::module('blogs');
 Route::module('placemarks');
 Route::module('menus');

Route::get('/clear-cache', function() {
     Artisan::call('cache:clear');
    return redirect()->back()->with('status','Cache Cleared!');
});

Route::get('/clear-view', function() {
    Artisan::call('view:clear');
    return redirect()->back()->with('status','Views Cleared!');
});


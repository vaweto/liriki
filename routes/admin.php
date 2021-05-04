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
    // return what you want
});


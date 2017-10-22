<?php

Route::namespace('Sapp\Package\Controllers')->as('package::')->middleware('web')->group(function () {
    // Routes defined here have the web middleware applied
    // like the web.php file in a laravel project
    // They also have an applied controller namespace and a route names.

    Route::middleware('sapp')->group(function () {
        // Routes defined here have the self-assigned middleware applied.
        // By default this middleware is emptysapp.
        Route::get('/index', 'HomeController@index')->name('home');

    });
});

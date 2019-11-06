<?php

Route::get('/', 'LoginController@isLoggedIn');

Route::get('login', function() {
    return view('pages/login');
});

Route::get('logout', 'LoginController@logout');

Route::get('home', 'HomeController@render');

Route::get('search', 'TmdbController@query');

Route::get('search/{type}/{id}', 'TmdbController@request');

Route::get('login/{type}', 'LoginController@submit');
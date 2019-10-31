<?php

Route::get('/', 'LoginController@isLoggedIn');

Route::get('login', function() {
    return view('pages/login');
});

Route::get('home', function() {
    return view('pages/home');
});

Route::get('search', 'TmdbController@query');

Route::get('query/{type}/{id}', 'TmdbController@request');

Route::get('login/{type}', 'LoginController@submit');
<?php

Route::get('/about', 'ErrorController@showUnderConstruction');
Route::get('/cv', 'ErrorController@showUnderConstruction');
Route::get('/contact', 'ErrorController@showUnderConstruction');

Route::get('/', 'HomeController@showWelcome');

<?php

Route::get('/portfolio', 'ErrorController@showUnderConstruction');
Route::get('/cv', 'ErrorController@showUnderConstruction');
Route::get('/contact', 'ErrorController@showUnderConstruction');

Route::get('/timeline', 'HomeController@showTimeline');
Route::get('/resume', 'HomeController@showResume');
Route::get('/', 'HomeController@showIndex');

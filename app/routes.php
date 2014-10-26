<?php

Route::get('{lang?}/portfolio', 'MainController@showUnderConstruction');
Route::get('{lang?}/cv', 'MainController@showUnderConstruction');

Route::get('{lang?}/contact', 'MainController@showContact');
Route::get('{lang?}/timeline', 'MainController@showTimeline');
Route::get('{lang?}/resume', 'MainController@showResume');
Route::get('{lang?}/', 'MainController@showIndex');

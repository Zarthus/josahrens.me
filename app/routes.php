<?php

Route::get('{lang?}/contact', 'MainController@showContact');
Route::get('{lang?}/timeline', 'MainController@showTimeline');
Route::get('{lang?}/resume', 'MainController@showResume');
Route::get('{lang?}/', 'MainController@showIndex');

<?php

Route::view('/', 'pages.home')->name('home');
Route::view('/stays', 'pages.stays')->name('stays');
Route::view('/become-a-host', 'pages.host')->name('host');

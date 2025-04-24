<?php

use Illuminate\Support\Facades\Route;

//Route::get('/test', function () {
//    return view('welcome');
//});


//Route::get('/test', function () {
//   echo "<ul><li>hey</li></ul>";
//});


//Route::get('/about', function () {
//    return view('about');
//});

Route::get('/about', function () {
    $name = ['first_name' => "aivars",];
    return view('about', ['name' => $name]);
});

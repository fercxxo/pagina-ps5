<?php

use Illuminate\Support\Facades\Route;

// Cuando entren a /ps5 muestra la página de la consola
Route::get('/ps5', function () {
    return view('ps5');
});

// Cuando entren a /dualsense muestra la página del control
Route::get('/dualsense', function () {
    return view('dualsense');
});
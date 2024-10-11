<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/catalogo1', function () {
    return view('Catalogo1');
});

Route::get('/catalogo2', function () {
    return view('Catalogo2');
});

Route::get('/catalogo3', function () {
    return view('Catalogo3');
});

Route::get('/herramienta1', function () {
    return view('Herramienta1');
});

Route::get('/herramienta2', function () {
    return view('Herramienta2');
});

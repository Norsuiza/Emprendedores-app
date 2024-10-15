<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/genText', function () {
    return view('genText');
});

Route::get('/genImg', function () {
    return view('genImg');
});

Route::get('/srcInfo', function () {
    return view('srcInfo');
});

Route::get('/catalogo1', function () {
    return view('catalogo1');
});

Route::get('/catalogo2', function () {
    return view('catalogo2');
});

Route::get('/catalogo3', function () {
    return view('catalogo3');
});

Route::get('/herramienta1', function () {
    return view('herramienta1');
});

Route::get('/herramienta2', function () {
    return view('herramienta2');
});

Route::get('/others', function () {
    return view('others');
});

Route::get('/readText', function () {
    return view('readText');
});

Route::get('/genIcon', function () {
    return view('genIcon');
});

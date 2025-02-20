<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/Manage', function () {
    return view('welcome');
});

Route::get('/Search', function () {
    return view('welcome');
});

Route::get('/About', function () {
    return view('welcome');
});



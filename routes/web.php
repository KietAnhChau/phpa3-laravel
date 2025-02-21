<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['name' => 'Home']);
})->name('home');

Route::get('/manage', function () {
    return view('manage', ['name' => 'Manage']);
})->name('manage');

Route::get('/search', function () {
    return view('search', ['name' => 'Search']);
})->name('search');

Route::get('/about', function () {
    return view('about', ['name' => 'About']);
})->name('about');



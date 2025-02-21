<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home', [
        'name' => 'Home',
    ]);
})->name('home');

Route::get('/manage', function () {
    return view('manage', [
        'name' => 'Manage',
        'isCreate' => false,
        'isEdit' => false,
    ]);
})->name('manage');

Route::get('/search', function () {
    return view('search', ['name' => 'Search']);
})->name('search');

Route::get('/about', function () {
    return view('about', ['name' => 'About']);
})->name('about');


Route::resource('/manage/products', ProductController::class);


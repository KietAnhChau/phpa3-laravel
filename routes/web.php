<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

Route::get('/', function () {
    // Create some dummy data

    if (!Product::all()->count() > 0) {
        Product::create([
            'name' => 'Product 1',
            'description' => 'Description 1',
            'price' => 100,
            'product_code' => 'P001',
        ]);

        Product::create([
            'name' => 'Product 2',
            'description' => 'Description 2',
            'price' => 200,
            'product_code' => 'P002',
        ]);

        Product::create([
            'name' => 'Product 3',
            'description' => 'Description 3',
            'price' => 300,
            'product_code' => 'P003',
        ]);

        Product::create([
            'name' => 'Product 4',
            'description' => 'Description 4',
            'price' => 400,
            'product_code' => 'P004',
        ]);
    }



    return view('home', [
        'name' => 'Home',
    ]);
})->name('home');

Route::get('/manage', function () {
    return view('manage', [
        'name' => 'Manage',
        'isCreate' => false,
        'isEdit' => false,
        'items' => Product::all(),
    ]);
})->name('manage');

Route::get('/search', function () {
    return view('search', ['name' => 'Search']);
})->name('search');

Route::get('/about', function () {
    return view('about', ['name' => 'About']);
})->name('about');


Route::resource('/manage/products', ProductController::class);


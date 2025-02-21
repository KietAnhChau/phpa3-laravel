<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{



    public function create()
    {
        return view('manage', [
            'name' => 'Manage',
            'isCreate' => true,
            'isEdit' => false,
            'items' => Product::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'product_code' => 'required|string',
        ]);

        Product::create($validated);

        return redirect()->route('manage', [
            'name' => 'Manage',
            'isCreate' => false,
            'isEdit' => false,
            'items' => Product::all(),
        ]);
    }

    public function edit(Request $request, Product $product)
    {
        return view('manage', [
            'name' => 'Manage',
            'isCreate' => false,
            'isEdit' => true,
            'items' => Product::all(),
            'product' => $product,
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'product_code' => 'required',
        ]);

        $product->update($validated);

        return redirect()->route('manage', [
            'name' => 'Manage',
            'isCreate' => false,
            'isEdit' => false,
            'items' => Product::all(),
        ]);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('manage', [
            'name' => 'Manage',
            'isCreate' => false,
            'isEdit' => false,
            'items' => Product::all(),
        ]);
    }

    public function show(Product $product)
    {
        return view('manage', [
            'name' => 'Manage',
            'isCreate' => false,
            'isEdit' => false,
            'items' => Product::all(),
        ]);
    }

    public function index()
    {
        return view('manage', [
            'name' => 'Manage',
            'isCreate' => false,
            'isEdit' => false,
            'items' => Product::all(),
        ]);
    }
}

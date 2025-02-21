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
        ]);
    }

    public function edit($id)
    {
        return view('manage', [
            'name' => 'Manage',
            'isCreate' => false,
            'isEdit' => true,
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
        ]);
    }
}

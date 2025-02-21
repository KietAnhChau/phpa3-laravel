<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $validated = $request->validate([
            'search' => 'required|string',
            'low' => 'required|string',
            'high' => 'required|string',
        ]);

        $validated['low'] = isset($validated['low']) ? (double) $validated['low'] : 0;
        $validated['high'] = isset($validated['high']) ? (double) $validated['high'] :  100;

        $items = Product::where('name', 'like', '%' . $validated['search'] . '%')
                ->orWhere('description', 'like', '%' . $validated['search'] . '%')
                ->whereBetween('price', [$validated['low'], $validated['high']])
                ->get();

        return view('search', [
            'name' => 'Search',
            'items' => $items,
        ]);
    }
}

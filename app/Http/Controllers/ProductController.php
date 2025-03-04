<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(Request $request) 
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'qty' => 'required|integer|min:1' 
        ]);

        $newProduct = Product::create($data);

        return response()->json($newProduct, 201); 
    }
}

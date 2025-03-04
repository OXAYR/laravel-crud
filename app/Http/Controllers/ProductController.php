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

    public function getAll(Request $request){
        $products = Product::all();
        return response()->json($products, 200);
    }

    public function getSingleProduct(Product $product){
        return response()->json($product , 200);
    }

    public function edit(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'qty' => 'required|integer|min:1'
            
        ]);
        $product->update($data);
    }

    public function delete(Product $product){
        $product->delete();
        
    }
}

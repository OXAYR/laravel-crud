<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(Requests $request){
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|decimal:0,2',   // 0 is the minimum and 2 is the maximum
            'description' => 'nullable',
            'qty' => 'required|numeric'  // it is neccessary to write the type of the table 
        ]);
        $newProduct = Product::create($data);
    }
}

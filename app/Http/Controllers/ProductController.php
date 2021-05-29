<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function ViewProduct(Product $product, $id) {
        $product = Product::where('id', $id)->get()->first();
        
        return view('ViewProduct', ['Product' => $product]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PizzaController extends Controller
{
    public function index() {
    $Pizzas = Product::all();

    return view('Hello', ['Pizzas' => $Pizzas]);
    }

    public function show() {
        return view('Main');
    }

    public function AddProduct(Request $request) {

        $Product = Product::Create($request->all());
        
        return $Product;
    }
}

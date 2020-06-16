<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $products = Product::all();
        $newProducts = Product::orderBy('created_at', 'DESC')->take(3)->get();
        return view('index', compact('products', 'newProducts'));
    }
    public function show(Product $product){
        return view('show', compact('product'));
    }
}

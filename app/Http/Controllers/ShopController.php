<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $products = [];
        return view('index', compact('products'));
    }
    public function show(){
        $product = [];
        return view('detail', compact('product'));
    }
}

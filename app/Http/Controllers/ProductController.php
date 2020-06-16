<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($this->validateProduct());
        Product::makeImageStorage($product);
        Product::setMultiplayer($product, $request);
        Product::storeImage($product, $request);
        return redirect('admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($this->validateProduct());
        if($request->imagePath !== null) {
            File::deleteDirectory('images/products/'.$product->id);
            Product::makeImageStorage($product);
            Product::storeImage($product, $request);
        }
        Product::setMultiplayer($product, $request);
        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        File::deleteDirectory('images/products/'.$product->id);
        $product->delete();
        return redirect('admin/products');
    }

    public function validateProduct(){
        return request()->validate([
            'name' => 'required',
            'price' => 'required',
            'code' => 'required',
            'manufacturer' => 'required',
            'platform' => 'required',
            'language' => 'required',
            'game_type' => 'required',
            'pegi_rating' => 'required',
            'imagePath' => '',
            'multiplayer' => ''
        ]);
    }
}

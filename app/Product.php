<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'price', 'code', 'imagePath', 'manufacturer', 'platform', 'language', 'game_type', 'pegi_rating', 'multiplayer', 'description'];

    public static function makeImageStorage($product){
        $path = 'images/products/'.$product->id;
        File::makeDirectory($path);
    }

    public static function storeImage($product, $request){
        $product->imagePath = str_replace(' ', '_', $product->imagePath->getClientOriginalName());
        $product->update();
        $file = $request->file('imagePath');
        $path = 'images/products/'.$product->id;
        Storage::disk('public')->putFileAs($path, $file, $product->imagePath);
    }

    public static function setMultiplayer($product, $request){
        if($request->multiplayer === null){
            $product->multiplayer = false;
            $product->save();
        }
        else{
            $product->multiplayer = true;
            $product->save();
        }
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'code', 'imagePath', 'manufacturer', 'platform', 'language', 'game_type', 'pegi_rating', 'multiplayer'];
}

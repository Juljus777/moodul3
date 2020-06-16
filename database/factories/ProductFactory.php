<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomFloat(60,0, 2),
        'code' => $faker->streetName,
        'imagePath' => 'https://placekitten.com/400/' . rand(200, 450),
        'manufacturer' => $faker->firstName . ' Industries',
        'platform' => $faker->name . ' Game Console',
        'language' => $faker->languageCode,
        'game_type' => $faker->name,
        'pegi_rating' => $faker->numberBetween(6, 18),
        'description' => $faker->sentences(5),
        'multiplayer' => rand(0,1)
    ];
});

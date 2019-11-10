<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Http\Models\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Product::class, function (Faker $faker) {
    return [
        'customer_id' => $faker->numberBetween($min = 1, $max = 125),
        
        'brandname' => $faker->randomElement($array = array ('nike','adidas','newbalance','sneakers','vans')),
        
        'color' => $faker->randomElement($array = array ('red','grey','black','yellow','white','bule')),
        
        'size' => $faker->numberBetween($min = 4, $max = 13),
        
        'price' => $faker->numberBetween($min = 100, $max = 300),
        
        'year' => $faker->numberBetween($min = 1999, $max = 2019),
        
        'series' => $faker->randomElement($array = array ('new version', 'null')),
        'img' => 'image/logo.jpg'
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'slug' => $faker->slug,
        'desc' => $faker->text,
        'image' => 'https://loremflickr.com/320/240',
        'point_sponsor' => $faker->numberBetween($min = 1000, $max = 9000) ,
        'point_pembeli' => $faker->numberBetween($min = 1000, $max = 9000) ,
        
    ];
});

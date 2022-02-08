<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Varian;
use Faker\Generator as Faker;

$factory->define(Varian::class, function (Faker $faker) {
    return [
        'name' => $faker->streetName,
        'price' =>  $faker->numberBetween($min = 50000, $max = 100000),
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
            'name' => $faker->sentence($nbWords = 2, $variableNbWords = true),
            'slug' => $faker->slug,
            'paket_id' => 1,
            'desc' => $faker->text($maxNbChars = 200),
            'image' => 'https://loremflickr.com/320/240',
            'point_pembeli' => $faker->numberBetween($min = 1000, $max = 9000) ,
            'point_sponsor' => $faker->numberBetween($min = 1000, $max = 9000) , 
            'commission' =>  $faker->numberBetween($min = 10000, $max = 50000),
            'price' => $faker->numberBetween($min = 10000, $max = 50000),
    ];
});

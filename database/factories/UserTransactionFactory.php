<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
    return [
            'product_id' => $faker->unique()->numberBetween($min = 1, $max = 10),
            'delivery_id' => $faker->numberBetween($min = 1, $max = 10),
            'kode' => $faker->numberBetween($min = 1000, $max = 5000),
            'price' => $faker->numberBetween($min = 6000, $max = 8000),
            'kuantiti' => 3,
            'status' =>  'pembayaran',
            'point_sponsor' => $faker->numberBetween($min = 1000, $max = 9000) ,
            'point_pembeli' => $faker->numberBetween($min = 1000, $max = 9000) ,
    ];
});

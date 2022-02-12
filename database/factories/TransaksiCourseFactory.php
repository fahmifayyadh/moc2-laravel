<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\TransactionCourse;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
$factory->define(TransactionCourse::class, function (Faker $faker) {
    return [
            'agent_id' =>  $faker->numberBetween($min = 1, $max = 10),
            'user_id' => $faker->numberBetween($min = 1, $max = 10),
            'kode' => Str::random(5),
            'price' => $faker->numberBetween($min = 25000, $max = 1000000),
            'batas' => '2020-11-11',
            'status' => 'pembayaran',
            'point_pembeli' => $faker->numberBetween($min = 1000, $max = 9000),
            'point_sponsor' => $faker->numberBetween($min = 1000, $max = 9000),
    
        ];
});

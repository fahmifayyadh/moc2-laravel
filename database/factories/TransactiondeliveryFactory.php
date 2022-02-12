<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Delivery;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Delivery::class, function (Faker $faker) {
    return [
       'province_id' => $faker->numberBetween($min = 1, $max = 10),
        'city_id' => $faker->numberBetween($min = 1, $max = 10),
        'name' => $faker->name,
        'alamat' => $faker->address ,
        'no_hp' => $faker->e164PhoneNumber ,
       'kode_pos' => $faker->postcode,
        'ongkir' => $faker->numberBetween($min = 25000, $max = 1000000),
    ];
});

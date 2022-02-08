<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Paket;
use Faker\Generator as Faker;

$factory->define(Paket::class, function (Faker $faker) {
    return [
        'name' => 'reguler'
    ];
});

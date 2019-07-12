<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\Memory::class, function (Faker $faker) {
    return [
        'vendor'     => $faker->text,
        'model'      => $faker->text,
        'capacity'   => $faker->text,
        'type'       => $faker->text,
        'speed'      => $faker->text,
        'ecc'        => $faker->boolean,
        'buffered'   => $faker->boolean,
        'registered' => $faker->boolean,
    ];
});

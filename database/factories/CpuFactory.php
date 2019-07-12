<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\Cpu::class, function (Faker $faker) {
    return [
        'architecture'    => $faker->word,
        'vendor'          => $faker->text,
        'family'          => $faker->text,
        'model'           => $faker->text,
        'speed'           => $faker->text,
        'cache_size'      => $faker->text,
        'number_of_cores' => $faker->randomNumber(),
    ];
});

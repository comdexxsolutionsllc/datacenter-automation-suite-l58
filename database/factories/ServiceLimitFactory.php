<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\ServiceLimit::class, function (Faker $faker) {
    return [
        'resource_operation_name' => $faker->word,
        'default_limit'           => $faker->randomNumber(),
        'min_limit'               => $faker->randomNumber(),
        'max_limit'               => $faker->randomNumber(),
        'burst_capacity'          => $faker->randomNumber(),
        'is_calls_per_second'     => $faker->boolean,
        'is_adjustable'           => $faker->dateTimeBetween(),
        'comments'                => $faker->text,
    ];
});

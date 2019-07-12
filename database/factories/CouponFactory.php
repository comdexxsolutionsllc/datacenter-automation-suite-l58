<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\General\Coupon::class, function (Faker $faker) {
    return [
        'type'             => $faker->word,
        'code'             => $faker->word,
        'value'            => $faker->word,
        'minimum_amount'   => $faker->word,
        'maximum_discount' => $faker->word,
        'valid_start_time' => $faker->dateTimeBetween(),
        'valid_end_time'   => $faker->dateTimeBetween(),
    ];
});

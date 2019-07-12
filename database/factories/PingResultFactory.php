<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\PingResult::class, function (Faker $faker) {
    return [
        'device_id'     => factory(App\Models\Support\Device::class)->create()->id,
        'run_date'      => $faker->dateTimeBetween(),
        'timeout'       => $faker->randomNumber(),
        'reply_i'       => $faker->randomNumber(),
        'time_to_live'  => $faker->randomNumber(),
        'response_time' => $faker->dateTimeBetween(),
        'response_ttl'  => $faker->randomNumber(),
        'status'        => $faker->word,
    ];
});

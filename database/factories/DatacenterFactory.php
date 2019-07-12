<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\Datacenter::class, function (Faker $faker) {
    return [
        'code'         => $faker->word,
        'location'     => $faker->word,
        'status'       => $faker->word,
        'opening_date' => $faker->dateTimeBetween(),
    ];
});

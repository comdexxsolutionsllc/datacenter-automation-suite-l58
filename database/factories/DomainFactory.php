<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Nameserver\Domain::class, function (Faker $faker) {
    return [
        'name'            => $faker->name,
        'master'          => $faker->word,
        'last_check'      => $faker->randomNumber(),
        'type'            => $faker->word,
        'notified_serial' => $faker->randomNumber(),
        'account'         => $faker->word,
    ];
});

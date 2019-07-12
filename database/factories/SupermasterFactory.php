<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Nameserver\Supermaster::class, function (Faker $faker) {
    return [
        'ip'         => $faker->word,
        'nameserver' => $faker->word,
        'account'    => $faker->word,
    ];
});

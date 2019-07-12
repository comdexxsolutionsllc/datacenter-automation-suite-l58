<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Nameserver\Tsigkey::class, function (Faker $faker) {
    return [
        'name'      => $faker->name,
        'algorithm' => $faker->word,
        'secret'    => $faker->word,
    ];
});

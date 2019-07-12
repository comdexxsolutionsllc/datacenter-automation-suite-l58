<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Website\Pricing::class, function (Faker $faker) {
    return [
        'plan'    => $faker->word,
        'price'   => $faker->randomFloat(),
        'details' => $faker->text,
    ];
});

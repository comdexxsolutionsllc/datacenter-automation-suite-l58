<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\ServiceNamespace::class, function (Faker $faker) {
    return [
        'services_id' => $faker->randomNumber(),
        'namespace'   => $faker->word,
    ];
});

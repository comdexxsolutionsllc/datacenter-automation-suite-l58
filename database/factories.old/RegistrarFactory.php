<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\General\Registrar::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'url'  => $faker->url,
        'type' => $faker->word,
    ];
});

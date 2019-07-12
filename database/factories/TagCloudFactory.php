<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\General\TagCloud::class, function (Faker $faker) {
    return [
        'tag_type'  => $faker->randomNumber(),
        'keyword'   => $faker->word,
        'frequency' => $faker->randomNumber(),
        'visible'   => $faker->boolean,
    ];
});

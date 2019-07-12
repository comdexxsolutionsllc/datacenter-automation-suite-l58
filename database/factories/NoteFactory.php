<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\Note::class, function (Faker $faker) {
    return [
        'body'          => $faker->text,
        'noteable_type' => $faker->word,
        'noteable_id'   => $faker->randomNumber(),
    ];
});

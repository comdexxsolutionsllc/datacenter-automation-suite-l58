<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\Status::class, function (Faker $faker) {
    return [
        'name'        => $faker->name,
        'description' => $faker->text,
        'hexcode'     => $faker->word,
        'visible'     => $faker->boolean,
        'deleted_at'  => $faker->dateTimeBetween(),
    ];
});

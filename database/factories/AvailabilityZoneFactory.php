<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\AvailabilityZone::class, function (Faker $faker) {
    return [
        'region_ids' => $faker->word,
        'comments'   => $faker->text,
    ];
});

<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\ResourceName::class, function (Faker $faker) {
    return [
        'partition'            => $faker->word,
        'service_namespace_id' => $faker->randomNumber(),
        'service_region_id'    => $faker->randomNumber(),
        'accountable_type'     => $faker->word,
        'accountable_id'       => $faker->randomNumber(),
    ];
});

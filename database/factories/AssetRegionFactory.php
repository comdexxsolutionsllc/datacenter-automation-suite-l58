<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\AssetRegion::class, function (Faker $faker) {
    return [
        'name'       => $faker->name,
        'identifier' => $faker->word,
        'endpoint'   => $faker->word,
        'protocol'   => $faker->word,
    ];
});

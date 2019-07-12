<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\Device::class, function (Faker $faker) {
    return [
        'name'      => $faker->name,
        'ip'        => $faker->word,
        'is_active' => $faker->boolean,
    ];
});

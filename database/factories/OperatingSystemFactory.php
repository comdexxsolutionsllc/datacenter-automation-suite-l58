<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\OperatingSystem::class, function (Faker $faker) {
    return [
        'architecture' => $faker->word,
        'type'         => $faker->word,
        'name'         => $faker->name,
        'notes'        => $faker->text,
        'active'       => $faker->boolean,
    ];
});

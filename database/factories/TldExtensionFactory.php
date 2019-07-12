<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\TldExtension::class, function (Faker $faker) {
    return [
        'domain'      => $faker->word,
        'description' => $faker->text,
        'type'        => $faker->word,
    ];
});

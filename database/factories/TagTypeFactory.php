<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\General\TagType::class, function (Faker $faker) {
    return [
        'model'       => $faker->word,
        'description' => $faker->text,
    ];
});

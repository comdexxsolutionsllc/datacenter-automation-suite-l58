<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Website\Chat::class, function (Faker $faker) {
    return [
        'unique_id'        => $faker->word,
        'accountable_type' => $faker->word,
        'accountable_id'   => $faker->randomNumber(),
        'technician_id'    => factory(App\Models\Support\Technician::class)->create()->id,
        'description'      => $faker->text,
        'message'          => $faker->word,
    ];
});

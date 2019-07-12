<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\ResourceGroup::class, function (Faker $faker) {
    return [
        'serial_number' => $faker->word,
        'service_ids'   => $faker->word,
        'notes'         => $faker->text,
    ];
});

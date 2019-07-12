<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\NetworkConfiguration::class, function (Faker $faker) {
    return [
        'switchport_information_id' => $faker->randomNumber(),
        'configuration'             => $faker->text,
    ];
});

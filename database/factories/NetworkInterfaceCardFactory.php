<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\NetworkInterfaceCard::class, function (Faker $faker) {
    return [
        'speed'           => $faker->word,
        'duplex'          => $faker->word,
        'mac_address'     => $faker->word,
        'serial_number'   => $faker->word,
        'number_of_ports' => $faker->randomNumber(),
        'vendor'          => $faker->word,
        'model'           => $faker->text,
        'status'          => $faker->word,
    ];
});

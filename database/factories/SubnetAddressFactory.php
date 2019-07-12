<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\SubnetAddress::class, function (Faker $faker) {
    return [
        'subnet_address' => $faker->word,
        'network_block'  => $faker->word,
        'network_mask'   => $faker->randomNumber(),
        'datacenter_id'  => $faker->randomNumber(),
        'available'      => $faker->dateTimeBetween(),
    ];
});

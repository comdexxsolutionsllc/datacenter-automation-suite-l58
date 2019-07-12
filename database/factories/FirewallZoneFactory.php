<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\FirewallZone::class, function (Faker $faker) {
    return [
        'network_asset_number' => $faker->word,
        'datacenter_id'        => $faker->randomNumber(),
        'network_device_id'    => $faker->randomNumber(),
        'available'            => $faker->dateTimeBetween(),
    ];
});

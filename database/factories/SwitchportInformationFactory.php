<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\SwitchportInformation::class, function (Faker $faker) {
    return [
        'network_device_id'        => factory(App\Models\Support\NetworkDevice::class)->create()->id,
        'switchport_number'        => $faker->randomNumber(),
        'category'                 => $faker->word,
        'port_speed'               => $faker->word,
        'connection_type'          => $faker->word,
        'poe_status'               => $faker->word,
        'stackable_status'         => $faker->word,
        'duplex_type'              => $faker->word,
        'network_configuration_id' => factory(App\Models\Support\NetworkConfiguration::class)->create()->id,
    ];
});

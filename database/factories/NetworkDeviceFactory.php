<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\NetworkDevice::class, function (Faker $faker) {
    return [
        'asset_number'           => $faker->word,
        'serial_number'          => $faker->word,
        'network_device_type_id' => $faker->randomNumber(),
        'hostname'               => $faker->word,
        'ip_address'             => $faker->word,
        'ip_address_alt'         => $faker->word,
        'hardware_maker'         => $faker->word,
        'hardware_version'       => $faker->word,
        'device_os_version'      => $faker->word,
        'total_ports'            => $faker->randomNumber(),
    ];
});

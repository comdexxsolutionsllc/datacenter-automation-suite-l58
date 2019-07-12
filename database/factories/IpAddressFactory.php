<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\IpAddress::class, function (Faker $faker) {
    return [
        'asset_owner'               => $faker->randomNumber(),
        'network_interface_card_id' => $faker->randomNumber(),
        'firewall_zone_id'          => $faker->randomNumber(),
        'port_number'               => $faker->randomNumber(),
        'accountable_type'          => $faker->word,
        'accountable_id'            => $faker->randomNumber(),
        'ip_address'                => $faker->word,
        'ip_address_type'           => $faker->word,
        'ip_address_visibility'     => $faker->word,
        'gateway_address'           => $faker->word,
        'subnet_address_id'         => $faker->randomNumber(),
        'other_ip_addresses'        => $faker->text,
        'active'                    => $faker->boolean,
        'notes'                     => $faker->text,
        'allocation_date'           => $faker->dateTimeBetween(),
    ];
});

<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\General\Asset;
use App\Models\Support\FirewallZone;
use App\Models\Support\NetworkInterfaceCard;
use App\Models\Support\SubnetAddress;
use Faker\Generator as Faker;

$factory->define(App\Models\Support\IpAddress::class, function (Faker $faker) {
    return [
        'asset_owner'               => factory(Asset::class),
        'network_interface_card_id' => factory(NetworkInterfaceCard::class),
        'firewall_zone_id'          => factory(FirewallZone::class),
        'port_number'               => $faker->randomNumber(2),
        'accountable_type'          => 'App\Models\Roles\Customer',
        'accountable_id'            => 1,
        'ip_address'                => $faker->ipv4,
        'ip_address_type'           => $faker->randomElement(['IPv4', 'IPv6', 'Reserved']),
        'ip_address_visibility'     => $faker->randomElement(['private', 'public']),
        'gateway_address'           => $faker->ipv4,
        'subnet_address_id'         => factory(SubnetAddress::class),
        'other_ip_addresses'        => null,
        'active'                    => $faker->boolean,
        'notes'                     => null,
        'allocation_date'           => $faker->dateTime(),
    ];
});

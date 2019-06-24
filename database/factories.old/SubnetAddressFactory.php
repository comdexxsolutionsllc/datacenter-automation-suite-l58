<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Support\Datacenter;
use Faker\Generator as Faker;

$factory->define(App\Models\Support\SubnetAddress::class, function (Faker $faker) {
    return [
        'subnet_address' => $faker->ipv4,
        'network_block'  => $faker->ipv4,
        //'network_mask' => factory(),
        'datacenter_id'  => factory(Datacenter::class),
        'available'      => $faker->dateTime,
    ];
});

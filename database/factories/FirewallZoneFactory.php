<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Support\Datacenter;
use App\Models\Support\NetworkDevice;
use Faker\Generator as Faker;

$factory->define(App\Models\Support\FirewallZone::class, function (Faker $faker) {
    return [
        'network_asset_number' => $faker->word,
        'datacenter_id'        => factory(Datacenter::class),
        'network_device_id'    => factory(NetworkDevice::class),
        'available'            => $faker->timezone,
    ];
});

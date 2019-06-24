<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\General\DCASHelper;
use App\General\HardwareId;
use App\Models\Support\NetworkDeviceType;
use Faker\Generator as Faker;

$factory->define(App\Models\Support\NetworkDevice::class, function (Faker $faker) {
    return [
        'asset_number'           => HardwareId::generate(),
        'serial_number'          => DCASHelper::makeSerialNumber(),
        'network_device_type_id' => $faker->randomElement(NetworkDeviceType::pluck('id')->all()),
        'hostname'               => $faker->domainName,
        'ip_address'             => $faker->ipv4,
        'ip_address_alt'         => $faker->randomElement([
            null,
            $faker->ipv4,
        ]),
        'hardware_maker'         => $faker->company,
        'hardware_version'       => '1.2.4',
        'device_os_version'      => $faker->linuxPlatformToken,
        'total_ports'            => $faker->randomElement([
            8,
            16,
            24,
            30,
            40,
            48,
            96,
            144,
        ]),
    ];
});

<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\General\DCASHelper;
use App\General\HardwareId;
use App\Models\Support\Datacenter;
use App\Models\Support\NetworkDevice;
use App\Models\Support\OperatingSystem;
use App\Models\Support\SwitchportInformation;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Models\General\Asset::class, function (Faker $faker) {
    return [
        'serial_number'           => DCASHelper::makeSerialNumber(),
        'hardware_id'             => HardwareId::generate(),
        'status'                  => $faker->word,
        'datacenter_id'           => function () use ($faker) {
            return $faker->randomElement(Datacenter::pluck('id')->all());
        },
        'network_device_id'       => function () use ($faker) {
            return $faker->randomElement(NetworkDevice::pluck('id')->all());
        },
        'switchport_id'           => function () use ($faker) {
            return $faker->randomElement(SwitchportInformation::pluck('id')->all());
        },
        'network_interface_cards' => 'NIC INFORMATION GOES HERE',
        'port_speed'              => 'PORT SPEED GOES HERE',
        'private_ip'              => $faker->localIpv4,
        'chassis'                 => 'CHASSIS GOES HERE',
        'motherboard_type'        => 'MOTHERBOARD GOES HERE',
        'cpus'                    => 'CPUS GO HERE',
        'memory'                  => 'MEMORY GOES HERE',
        'disks'                   => 'DISKS GO HERE',
        'operating_system_id'     => function () use ($faker) {
            return $faker->randomElement(OperatingSystem::pluck('id')->all());
        },
        'control_panel'           => null,
        'administrator_password'  => DCASHelper::randomPassword(),
        'onhand_qty'              => $faker->randomDigit,
        'pending_testing_qty'     => $faker->randomDigit,
        'rma_qty'                 => $faker->randomDigit,
        'last_checkin'            => function () use ($faker) {
            return $faker->randomElement([Carbon::now(), null]);
        },
    ];
});

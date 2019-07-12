<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\General\Asset::class, function (Faker $faker) {
    return [
        'serial_number'           => $faker->word,
        'hardware_id'             => $faker->word,
        'status'                  => $faker->word,
        'datacenter_id'           => factory(App\Models\Support\Datacenter::class)->create()->id,
        'network_device_id'       => factory(App\Models\General\Asset::class)->create()->id,
        'switchport_id'           => factory(App\Models\Support\SwitchportInformation::class)->create()->id,
        'network_interface_cards' => $faker->text,
        'port_speed'              => $faker->word,
        'private_ip'              => $faker->word,
        'chassis'                 => $faker->word,
        'motherboard_type'        => $faker->word,
        'cpus'                    => $faker->text,
        'memory'                  => $faker->text,
        'disks'                   => $faker->text,
        'operating_system_id'     => factory(App\Models\Support\OperatingSystem::class)->create()->id,
        'control_panel'           => $faker->word,
        'administrator_password'  => $faker->word,
        'onhand_qty'              => $faker->randomNumber(),
        'pending_testing_qty'     => $faker->randomNumber(),
        'rma_qty'                 => $faker->randomNumber(),
        'last_checkin'            => $faker->dateTimeBetween(),
    ];
});

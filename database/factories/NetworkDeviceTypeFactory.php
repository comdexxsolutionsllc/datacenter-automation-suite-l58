<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\NetworkDeviceType::class, function (Faker $faker) {
    return [
        'name'              => $faker->name,
        'description'       => $faker->text,
        'active'            => $faker->boolean,
        'network_device_id' => factory(App\Models\Support\NetworkDevice::class)->create()->id,
    ];
});

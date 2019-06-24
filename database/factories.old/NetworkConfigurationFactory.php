<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Support\SwitchportInformation;
use Faker\Generator as Faker;

$factory->define(App\Models\Support\NetworkConfiguration::class, function (Faker $faker) {
    return [
        'switchport_information_id' => $faker->randomElement(SwitchportInformation::pluck('id')->all()),
        'configuration'             => $faker->sentences(5, true),
    ];
});

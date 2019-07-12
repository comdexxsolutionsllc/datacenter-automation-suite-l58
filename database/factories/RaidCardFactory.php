<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\RaidCard::class, function (Faker $faker) {
    return [
        'vendor'                      => $faker->text,
        'model'                       => $faker->text,
        'launch_date'                 => $faker->dateTimeBetween(),
        'expected_discontinuance'     => $faker->dateTimeBetween(),
        'data_transfer_rate'          => $faker->randomNumber(),
        'supported_devices'           => $faker->word,
        'supported_raid_levels'       => $faker->word,
        'jbod_mode'                   => $faker->boolean,
        'number_of_internal_ports'    => $faker->randomNumber(),
        'number_of_supported_devices' => $faker->randomNumber(),
        'embedded_memory'             => $faker->randomNumber(),
        'supported_oses'              => $faker->word,
    ];
});

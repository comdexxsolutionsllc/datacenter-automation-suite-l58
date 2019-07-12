<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\MotherboardType::class, function (Faker $faker) {
    return [
        'vendor'                    => $faker->word,
        'model'                     => $faker->text,
        'form_factor'               => $faker->word,
        'assigned_chassis'          => $faker->randomNumber(),
        'assigned_hdds'             => $faker->word,
        'assigned_memory'           => $faker->word,
        'assigned_networking_cards' => $faker->word,
        'assigned_raid_cards'       => $faker->word,
        'bios_features'             => $faker->text,
        'chipset'                   => $faker->word,
        'expansion_slots'           => $faker->text,
        'front_side_bus'            => $faker->text,
        'hdd_connection_type'       => $faker->word,
        'processor_information'     => $faker->word,
    ];
});

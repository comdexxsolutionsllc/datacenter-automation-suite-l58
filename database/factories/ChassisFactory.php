<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\Chassis::class, function (Faker $faker) {
    return [
        'asset_owner'                => $faker->randomNumber(),
        'accountable_type'           => $faker->word,
        'accountable_id'             => $faker->randomNumber(),
        'vendor'                     => $faker->word,
        'model'                      => $faker->text,
        'serial_number'              => $faker->word,
        'form_factor_in_u'           => $faker->word,
        'chassis_type'               => $faker->word,
        'power_supply'               => $faker->text,
        'hot_swap_drive_bays'        => $faker->randomNumber(),
        'internal_drive_bays'        => $faker->randomNumber(),
        'expansion_slots'            => $faker->randomNumber(),
        'expansion_slot_information' => $faker->text,
    ];
});

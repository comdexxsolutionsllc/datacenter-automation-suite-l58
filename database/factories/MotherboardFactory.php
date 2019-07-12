<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\Motherboard::class, function (Faker $faker) {
    return [
        'vendor'                   => $faker->text,
        'model'                    => $faker->text,
        'cpu_id'                   => $faker->randomNumber(),
        'chipset'                  => $faker->word,
        'socket_type'              => $faker->word,
        'form_factor'              => $faker->word,
        'dvi'                      => $faker->text,
        'hdmi'                     => $faker->text,
        'display_port'             => $faker->text,
        'bios'                     => $faker->word,
        'graphics'                 => $faker->word,
        'audio'                    => $faker->word,
        'audio_chipset'            => $faker->word,
        'lan'                      => $faker->word,
        'max_lan_speed'            => $faker->randomNumber(),
        'memory_slots'             => $faker->randomNumber(),
        'maximum_memory_supported' => $faker->randomNumber(),
        'channels_supported'       => $faker->word,
        'storage'                  => $faker->word,
        'connectors'               => $faker->word,
        'supported_oses'           => $faker->word,
        'notes'                    => $faker->text,
        'eol_announced'            => $faker->boolean,
        'ipmi_enabled'             => $faker->boolean,
    ];
});

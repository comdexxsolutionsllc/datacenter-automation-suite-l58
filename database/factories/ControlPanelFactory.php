<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\ControlPanel::class, function (Faker $faker) {
    return [
        'control_panel'    => $faker->text,
        'free'             => $faker->boolean,
        'frontend'         => $faker->text,
        'backend'          => $faker->text,
        'databases'        => $faker->text,
        'dns'              => $faker->text,
        'ftp'              => $faker->text,
        'email'            => $faker->safeEmail,
        'multi_server'     => $faker->boolean,
        'operating_system' => $faker->word,
        'ipv6_enabled'     => $faker->boolean,
    ];
});

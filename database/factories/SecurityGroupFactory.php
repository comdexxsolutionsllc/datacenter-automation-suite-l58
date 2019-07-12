<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\SecurityGroup::class, function (Faker $faker) {
    return [
        'security_group_serial' => $faker->word,
        'source'                => $faker->word,
        'direction'             => $faker->word,
        'protocol'              => $faker->word,
        'port_range'            => $faker->word,
        'comments'              => $faker->text,
    ];
});

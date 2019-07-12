<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Nameserver\Record::class, function (Faker $faker) {
    return [
        'domain_id'   => factory(App\Models\Nameserver\Domain::class)->create()->id,
        'name'        => $faker->name,
        'type'        => $faker->word,
        'content'     => $faker->word,
        'ttl'         => $faker->randomNumber(),
        'priority'    => $faker->randomNumber(),
        'change_date' => $faker->randomNumber(),
        'disabled'    => $faker->boolean,
        'ordername'   => $faker->word,
        'auth'        => $faker->boolean,
    ];
});

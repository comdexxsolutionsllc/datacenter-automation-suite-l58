<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Nameserver\Cryptokey::class, function (Faker $faker) {
    return [
        'domain_id' => factory(App\Models\Nameserver\Domain::class)->create()->id,
        'flags'     => $faker->randomNumber(),
        'active'    => $faker->boolean,
        'content'   => $faker->text,
    ];
});

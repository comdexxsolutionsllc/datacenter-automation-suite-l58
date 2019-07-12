<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\General\Service::class, function (Faker $faker) {
    return [
        'account_id'   => $faker->randomNumber(),
        'account_type' => $faker->word,
        'service_type' => $faker->word,
        'status'       => $faker->word,
        'last_payment' => $faker->dateTimeBetween(),
        'last_invoice' => $faker->dateTimeBetween(),
    ];
});

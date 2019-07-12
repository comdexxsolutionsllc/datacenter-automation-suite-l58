<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\General\Reseller::class, function (Faker $faker) {
    return [
        'account_id'  => $faker->word,
        'company_id'  => $faker->randomNumber(),
        'expiry_date' => $faker->dateTimeBetween(),
        'salesrep_id' => $faker->randomNumber(),
    ];
});

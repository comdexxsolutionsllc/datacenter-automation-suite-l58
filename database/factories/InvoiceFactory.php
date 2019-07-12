<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\General\Invoice::class, function (Faker $faker) {
    return [
        'account_id'      => $faker->randomNumber(),
        'account_type'    => $faker->word,
        'subtotal'        => $faker->word,
        'payment_option'  => $faker->word,
        'transaction_id'  => $faker->word,
        'paypal_email'    => $faker->word,
        'billing_info_id' => $faker->randomNumber(),
        'date'            => $faker->dateTimeBetween(),
        'date_due'        => $faker->dateTimeBetween(),
        'date_paid'       => $faker->dateTimeBetween(),
    ];
});

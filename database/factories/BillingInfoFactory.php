<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\General\BillingInfo::class, function (Faker $faker) {
    return [
        'first_name'   => $faker->firstName,
        'last_name'    => $faker->lastName,
        'company'      => $faker->company,
        'address_1'    => $faker->word,
        'address_2'    => $faker->word,
        'city'         => $faker->city,
        'state'        => $faker->word,
        'postal_code'  => $faker->word,
        'country'      => $faker->country,
        'phone_number' => $faker->word,
        'phone_type'   => $faker->word,
        'invoice_id'   => factory(App\Models\General\Invoice::class)->create()->id,
    ];
});

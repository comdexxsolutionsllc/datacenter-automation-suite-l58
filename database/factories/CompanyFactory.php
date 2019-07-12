<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\General\Company::class, function (Faker $faker) {
    return [
        'name'          => $faker->name,
        'contact_name'  => $faker->word,
        'contact_email' => $faker->word,
        'contact_phone' => $faker->word,
        'phone_type'    => $faker->word,
        'active'        => $faker->boolean,
        'reseller_id'   => factory(App\Models\General\Reseller::class)->create()->id,
    ];
});

<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\General\Subscription::class, function (Faker $faker) {
    return [
        'user_id'       => factory(App\Models\Roles\Customer::class)->create()->id,
        'name'          => $faker->name,
        'stripe_id'     => $faker->word,
        'stripe_plan'   => $faker->word,
        'quantity'      => $faker->randomNumber(),
        'trial_ends_at' => $faker->dateTimeBetween(),
        'ends_at'       => $faker->dateTimeBetween(),
    ];
});

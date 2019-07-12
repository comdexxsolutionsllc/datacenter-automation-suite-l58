<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Roles\Whiteglove::class, function (Faker $faker) {
    return [
        'account_id'        => $faker->word,
        'name'              => $faker->name,
        'username'          => $faker->userName,
        'email'             => $faker->safeEmail,
        'email_verified_at' => $faker->dateTimeBetween(),
        'password'          => bcrypt($faker->password),
        'stripe_id'         => $faker->word,
        'card_brand'        => $faker->word,
        'card_last_four'    => $faker->word,
        'trial_ends_at'     => $faker->dateTimeBetween(),
        'cover'             => $faker->word,
        'avatar'            => $faker->word,
        'remember_token'    => Str::random(10),
        'last_active'       => $faker->dateTimeBetween(),
        'cart_session_id'   => $faker->word,
    ];
});

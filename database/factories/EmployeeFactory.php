<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Roles\Employee::class, function (Faker $faker) {
    return [
        'employee_id'       => $faker->word,
        'name'              => $faker->name,
        'username'          => $faker->userName,
        'email'             => $faker->safeEmail,
        'email_verified_at' => $faker->dateTimeBetween(),
        'password'          => bcrypt($faker->password),
        'cover'             => $faker->word,
        'avatar'            => $faker->word,
        'remember_token'    => Str::random(10),
        'last_active'       => $faker->dateTimeBetween(),
        'cart_session_id'   => $faker->word,
    ];
});

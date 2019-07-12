<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\General\Cart::class, function (Faker $faker) {
    return [
        'cart_data' => $faker->text,
    ];
});

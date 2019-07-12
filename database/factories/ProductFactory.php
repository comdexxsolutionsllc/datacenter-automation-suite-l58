<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\General\Product::class, function (Faker $faker) {
    return [
        'qty'         => $faker->text,
        'name'        => $faker->name,
        'description' => $faker->text,
        'taxable'     => $faker->boolean,
        'lineItem'    => $faker->boolean,
        'price'       => $faker->text,
    ];
});

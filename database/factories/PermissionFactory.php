<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\General\Permission::class, function (Faker $faker) {
    return [
        'name'       => $faker->name,
        'guard_name' => $faker->word,
    ];
});

<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Website\AboutUs::class, function (Faker $faker) {
    return [
        'name'        => $faker->name,
        'portrait'    => $faker->word,
        'job_title'   => $faker->word,
        'job_summary' => $faker->text,
    ];
});

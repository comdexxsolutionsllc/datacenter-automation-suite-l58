<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\Comment::class, function (Faker $faker) {
    return [
        'body'             => $faker->text,
        'commentable_type' => $faker->word,
        'commentable_id'   => $faker->randomNumber(),
    ];
});

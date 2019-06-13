<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Nameserver\Domain;
use Faker\Generator as Faker;

$factory->define(App\Models\Nameserver\Comment::class, function (Faker $faker) {
    return [
        'domain_id'   => $faker->randomFloat(Domain::pluck('id')->all()),
        'name'        => $faker->word,
        'type'        => $faker->word,
        'modified_at' => $faker->unixTime,
        'account'     => $faker->word,
        'comment'     => $faker->sentence,
    ];
});

<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Nameserver\Domainmetadata::class, function (Faker $faker) {
    return [
        'domain_id' => factory(App\Models\Nameserver\Domain::class)->create()->id,
        'kind'      => $faker->word,
        'content'   => $faker->text,
    ];
});

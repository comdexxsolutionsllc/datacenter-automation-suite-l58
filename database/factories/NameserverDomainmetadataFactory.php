<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Nameserver\Domain;
use Faker\Generator as Faker;

$factory->define(App\Models\Nameserver\Domainmetadata::class, function (Faker $faker) {
    return [
        'domain_id' => $faker->randomElement(Domain::pluck('id')->all()),
        'kind'      => null,
        'content'   => null,
    ];
});

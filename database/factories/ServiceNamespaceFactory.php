<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\General\Service;
use Faker\Generator as Faker;

$factory->define(App\Models\Support\ServiceNamespace::class, function (Faker $faker) {
    return [
        'services_id' => factory(Service::class),
        'namespace'   => $faker->word,
    ];
});

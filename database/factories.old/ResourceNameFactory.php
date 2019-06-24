<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Support\AssetRegion;
use App\Models\Support\ServiceNamespace;
use Faker\Generator as Faker;

$factory->define(App\Models\Support\ResourceName::class, function (Faker $faker) {
    return [
        'partition'            => $faker->word,
        'service_namespace_id' => factory(ServiceNamespace::class),
        'service_region_id'    => factory(AssetRegion::class),
        'accountable_id'       => 1,
        'accountable_type'     => 'App\Models\Roles\Customer',
    ];
});

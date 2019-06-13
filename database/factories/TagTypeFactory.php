<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\General\DCASHelper;
use App\Models\General\TagType;
use Faker\Generator as Faker;

/**
 * @todo fix this.
 */
$factory->define(TagType::class, function (Faker $faker) {
    return [
        'model'       => $faker->randomElement(DCASHelper::getModels()),
        'description' => $faker->sentence,
    ];
});

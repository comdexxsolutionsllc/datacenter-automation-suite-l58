<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\General\TagCloud;
use App\Models\General\TagType;
use Faker\Generator as Faker;

$factory->define(TagCloud::class, function (Faker $faker) {
    return [
        'tag_type'  => factory(TagType::class),
        'keyword'   => $faker->word,
        'frequency' => $faker->numberBetween(1, 1000),
        'visible'   => $faker->boolean,
    ];
});

<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Website\Pricing::class, function (Faker $faker) {
    return [
        'plan'    => $faker->word,
        'price'   => $faker->randomFloat(2, 2),
        'details' => function () use ($faker) {
            $detailList = $faker->sentences(8);
            $result = [];

            foreach ($detailList as $detail) {
                $result[] .= strtr($detail, ['.' => '']);
            }

            $details = implode('\n', $result);

            return $details;
        },
    ];
});

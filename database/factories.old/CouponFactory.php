<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\General\Coupon;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Coupon::class, function (Faker $faker) {
    return [
        'type'             => $type = $faker->randomElement(['fixed', 'percentage']),
        'code'             => strtoupper(strtr($faker->text(10), ['.' => '', ' ' => ''])),
        'value'            => $type === 'percentage' ? $faker->randomFloat(2, 0.01, 1.00) : $faker->randomFloat(2, 10, 100),
        'minimum_amount'   => $faker->randomFloat(2, 1, 100),
        'maximum_discount' => $faker->randomFloat(2, 0.01, 0.5),
        'valid_start_time' => Carbon::now(),
        'valid_end_time'   => (Carbon::now())->addDays(rand(1, 365)),
    ];
});

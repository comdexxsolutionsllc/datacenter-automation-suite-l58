<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Support\Device;
use App\Models\Support\PingResult;
use Carbon\Carbon;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(PingResult::class, function (Faker $faker) {
    return [
        'device_id'     => function () use ($faker) {
            return factory(Device::class);
        },
        'run_date'      => Carbon::now()->format('Y-m-d H:i:s'),
        'timeout'       => rand(1, 10),
        'reply_i'       => rand(1, 10),
        'time_to_live'  => rand(1, 10),
        'response_time' => Carbon::now()->format('Y-m-d H:i:s'),
        'response_ttl'  => rand(1, 10),
        'status'        => $faker->word,
    ];
});

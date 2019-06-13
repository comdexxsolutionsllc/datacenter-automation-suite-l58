<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Roles\Customer;
use App\Models\Support\Technician;
use App\Models\Website\Chat;
use Faker\Generator as Faker;

$factory->define(Chat::class, function (Faker $faker) {
    return [
        'unique_id'        => $faker->uuid,
        'accountable_id'   => function () {
            return Customer::inRandomOrder()->first()->id;
        },
        'accountable_type' => 'App\Models\Roles\Customer',
        'technician_id'    => function () {
            return factory(Technician::class)->create()->employee_id;
        },
        'description'      => $faker->sentence(12),
        'message'          => function () use ($faker) {
            return json_encode([
                'isTechnician' => $faker->boolean,
                'message'      => $faker->sentence(8),
            ]);
        },
    ];
});

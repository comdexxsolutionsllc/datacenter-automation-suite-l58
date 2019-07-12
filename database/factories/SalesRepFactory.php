<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\SalesRep::class, function (Faker $faker) {
    return [
        'employee_id' => factory(App\Models\Roles\Employee::class)->create()->id,
        'company_id'  => $faker->randomNumber(),
        'reseller_id' => factory(App\Models\General\Reseller::class)->create()->id,
    ];
});

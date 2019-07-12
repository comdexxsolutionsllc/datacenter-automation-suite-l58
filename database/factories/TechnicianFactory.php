<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\Technician::class, function (Faker $faker) {
    return [
        'id'            => $faker->randomNumber(),
        'department_id' => $faker->randomNumber(),
        'employee_id'   => $faker->randomNumber(),
        'user_id'       => factory(App\Models\Roles\Employee::class)->create()->id,
    ];
});

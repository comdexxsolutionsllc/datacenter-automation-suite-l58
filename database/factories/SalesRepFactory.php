<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\General\Company;
use App\Models\Roles\Employee;
use Faker\Generator as Faker;

$factory->define(App\Models\Support\SalesRep::class, function (Faker $faker) {
    return [
        'employee_id' => $faker->randomElement(Employee::pluck('id')->all()),
        'company_id'  => $faker->randomElement(Company::pluck('id')->all()),
    ];
});

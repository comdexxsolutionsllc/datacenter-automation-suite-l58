<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\General\AccountId;
use App\Models\General\Company;
use App\Models\Support\SalesRep;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Models\General\Reseller::class, function (Faker $faker) {
    return [
        'account_id'  => AccountId::generate(),
        'company_id'  => $faker->randomElement(Company::pluck('id')->all()),
        'expiry_date' => Carbon::now()->addDays(180),
        'salesrep_id' => $faker->randomElement(SalesRep::pluck('id')->all()),
    ];
});

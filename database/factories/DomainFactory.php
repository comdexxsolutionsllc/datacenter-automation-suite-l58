<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\General\DCASHelper;
use App\Models\General\Registrar;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Models\General\Domain::class, function (Faker $faker) {
    return [
        'account_type'         => $account_type = 'App\\Models\\Roles\\' . ucfirst($faker->randomElement(DCASHelper::getRoles())),
        'account_id'           => function () use ($account_type, $faker) {
            return $faker->randomElement($account_type::pluck('id')->all());
        },
        'registrar_id'         => function () use ($faker) {
            return $faker->randomElement(Registrar::pluck('id')->all());
        },
        'domain_name'          => $faker->domainName,
        'active'               => $faker->boolean,
        'monitor'              => $faker->boolean,
        'whois_record_updated' => Carbon::now(),
        'whois_record_created' => Carbon::now(),
        'whois_record_expiry'  => Carbon::now(),
    ];
});

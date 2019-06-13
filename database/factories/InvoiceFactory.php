<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\General\DCASHelper;
use App\Models\General\BillingInfo;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Models\General\Invoice::class, function (Faker $faker) {
    return [
        'account_type'    => $account_type = 'App\\Models\\Roles\\' . ucfirst($faker->randomElement(DCASHelper::getRoles())),
        'account_id'      => function () use ($account_type, $faker) {
            return $faker->randomElement($account_type::pluck('id')->all());
        },
        'subtotal'        => $faker->randomFloat(2, 2, 2),
        'payment_option'  => $payment_option = $faker->randomElement([
            'check',
            'credit card',
            'free',
            'mail',
            'NET 30',
            'NET 90',
            'paypal',
        ]),
        'transaction_id'  => strtoupper(str_random(24)),
        'paypal_email'    => function () use ($faker, $payment_option) {
            return ($payment_option === 'paypal') ? $faker->email : null;
        },
        'billing_info_id' => function () use ($faker) {
            return $faker->randomElement(BillingInfo::pluck('id')->all());
        },
        'date'            => Carbon::now(),
        'date_due'        => Carbon::now()->addDays(28),
        'date_paid'       => function () use ($faker) {
            return $faker->randomElement([
                null,
                Carbon::now()->addDays(28)->subDays(rand(0, 28)),
            ]);
        },
    ];
});

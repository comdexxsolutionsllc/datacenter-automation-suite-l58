<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\General\Invoice;
use App\Models\General\Service;
use Faker\Generator as Faker;

$factory->define(App\Models\General\InvoiceItem::class, function (Faker $faker) {
    return [
        'invoice_id'  => $faker->randomElement(Invoice::pluck('id')->all()),
        'service_id'  => $faker->randomElement(Service::pluck('id')->all()),
        'description' => $faker->sentence,
        'price'       => $faker->randomFloat(2, 2, 2),
    ];
});

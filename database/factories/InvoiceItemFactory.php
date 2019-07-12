<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\General\InvoiceItem::class, function (Faker $faker) {
    return [
        'invoice_id'  => factory(App\Models\General\Invoice::class)->create()->id,
        'service_id'  => $faker->randomNumber(),
        'description' => $faker->text,
        'price'       => $faker->word,
    ];
});

<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\General\InboundEmail::class, function (Faker $faker) {
    return [
        'body_plain'         => $faker->text,
        'date'               => $faker->dateTimeBetween(),
        'domain'             => $faker->word,
        'from'               => $faker->word,
        'from_full'          => $faker->word,
        'message_headers'    => $faker->text,
        'message_id'         => $faker->word,
        'message_url'        => $faker->text,
        'recipient'          => $faker->word,
        'sender'             => $faker->word,
        'stripped_html'      => $faker->text,
        'stripped_signature' => $faker->text,
        'stripped_text'      => $faker->text,
        'subject'            => $faker->word,
        'response_timestamp' => $faker->dateTimeBetween(),
        'token'              => $faker->word,
    ];
});

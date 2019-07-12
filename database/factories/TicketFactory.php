<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Support\Ticket::class, function (Faker $faker) {
    return [
        'ticket_id'              => $faker->word,
        'title'                  => $faker->word,
        'body'                   => $faker->text,
        'status_id'              => factory(App\Models\Support\Status::class)->create()->id,
        'department_id'          => factory(App\Models\Support\Department::class)->create()->id,
        'technician_assigned_id' => $faker->randomNumber(),
        'is_resolved'            => $faker->boolean,
        'deleted_at'             => $faker->dateTimeBetween(),
        'ticketable_type'        => $faker->word,
        'ticketable_id'          => $faker->randomNumber(),
    ];
});

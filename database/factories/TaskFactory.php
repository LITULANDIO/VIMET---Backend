<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use\App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'due_date' => $faker->dateTime,
        'description' => $faker->sentence,
        'completed' => '0'
    ];
});



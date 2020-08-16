<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TimeEntry;
use Faker\Generator as Faker;

$factory->define(TimeEntry::class, function (Faker $faker) {
    $username = [
        'Amitav',
        'Jhon',
        'Michael',
        'James',
        'Robert',
        'William',
        'David',
        'Thomas',
        'Christopher',
        'Matthew',
        'Donald',
        'Andrew',
        'Edward',
        'Jason',
    ];

    $project = ['Youtube', 'Google Play', 'Vuejs', 'Twitter', 'MySQL Package', 'JSAlbum', 'Website'];

    return [
        'username' => $faker->randomElement($username),
        'project' => $faker->randomElement($project),
        'date' => $faker->dateTimeBetween('-6 months', 'now'),
        'time' => rand(1, 8),
    ];
});

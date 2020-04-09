<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Evenement;
use Faker\Generator as Faker;

$factory->define(Evenement::class, function (Faker $faker) {
    return [
        'titre' => $faker->word,
        'date' => $faker->dateTime($max = 'now', $timezone = null),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'artiste' => $faker->name,
        'durée' => $faker->time($format = 'H:i:s', $max = '10'),
    ];
});

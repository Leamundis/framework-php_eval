<?php

use Faker\Generator as Faker;

$factory->define(App\Cat::class, function (Faker $faker) {
    return [
        'legend' => $faker->text($maxNbChars = 75),
        'description' => $faker->text($maxNbChars = 255),
        'url' => $faker->imageUrl($width = 500, $height = 500, 'cats')
    ];
});

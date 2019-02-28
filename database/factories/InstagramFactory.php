<?php

use Faker\Generator as Faker;

$factory->define(App\Instagram::class, function (Faker $faker) {
    return [
        'image'=> $faker->imageUrl($width = 115, $height = 115, 'cats'),
    ];
});

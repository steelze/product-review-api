<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use App\User;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'review' => $faker->paragraph,
        'rating' => $faker->numberBetween(0, 5),
        'user_id' => function() {
            return User::all()->random();
        },
    ];
});

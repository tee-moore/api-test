<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Movie::class, function (Faker $faker)
{
    return [
        'name'      => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'year'      => $faker->numberBetween($min = 1980, $max = 2018),//year($max = 'now')
        'format_id' => $faker->numberBetween($min = 1, $max = 3),
        'user_id'   => $faker->numberBetween($min = 1, $max = 3),
    ];
});

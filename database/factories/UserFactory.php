<?php

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


$factory->define(TechObserversBlog\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => 'secret', // secret
        'remember_token' => str_random(10),
    ];
});
$factory->define(TechObserversBlog\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'content' => $faker->paragraph(20),
        'user_id' => TechObserversBlog\User::all()->random()->id, 
        'live' => $faker->boolean(),
        'post_on' => Carbon\Carbon::parse('+1 week'),
    ];
});

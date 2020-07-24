<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph(3),
    ];
});

//$factory->define(Post::class, function ($faker) {
//    return [
//        'title' => $faker->sentence,
//        'body' => $faker->paragraph,
//        'user_id' => factory(User::class),
//    ];
//});

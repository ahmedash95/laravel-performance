<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Model;
use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => implode(' ',$faker->words(5)),
        'content' => $faker->paragraph(100),
        'status' => ['draft','published','archived'][rand(0,2)],
        'published_at' => $faker->dateTime,
    ];
});

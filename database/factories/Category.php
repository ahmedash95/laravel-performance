<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => implode(' ',$faker->words(3)),
        'description' => implode(' ',$faker->words(500)),
    ];
});

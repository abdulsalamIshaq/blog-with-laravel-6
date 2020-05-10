<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->sentence($ndWords = 6, $variableBnWords = true),
        'content' => $faker->text(),
        'category_id' => $faker->randomDigitNotNull
    ];
});
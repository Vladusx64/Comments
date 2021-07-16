<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'name'=> $faker->word(),
        'email'=> $faker->email(),
        'message'=> $faker->text(400),
        'file_path' => $faker->imageUrl(640, 480, 'animals', true)
    ];
});

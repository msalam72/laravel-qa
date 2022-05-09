<?php
use Illuminate\Support\Str;
use Faker\Generator as Faker;

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

$factory->define(App\Models\Question::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(5,100)), "."),
        'body'=> $faker-> paragraphs(rand(3,7), true),
        'views'=>rand(0,10),
        'answers'=>rand(0,10),
        'votes'=>rand(-3,10)
    ];
});

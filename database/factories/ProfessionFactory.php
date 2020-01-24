<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Profession::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3)
    ];
});

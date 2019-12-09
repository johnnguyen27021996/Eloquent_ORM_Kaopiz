<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Bt1_User::class, function (Faker $faker) {
    return [
        'name' => $faker->email,
        'class' => $faker->streetName
    ];
});

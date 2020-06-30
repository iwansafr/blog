<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
       'firstname' => $faker->name,
       'lastname' => $faker->name,
       'phone'=> $faker->e164PhoneNumber

    ];
});

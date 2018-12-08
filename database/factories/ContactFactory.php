<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
| 
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'contact_type' => $faker->contact_type,
        'contact_name' => $faker->contact_name,
        'contact_email' => $faker->contact_email,
        'contact_mobileNo' => $faker->contact_mobileNo,
        'contact_landlineNo' => $faker->contact_landlineNo,
        'contact_companyID' => $faker->contact_companyID,
        'contact_companyName' => $faker->contact_companyName,
        'contact_designation' => $faker->contact_designation,
    ];
});
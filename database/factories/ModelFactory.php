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
        'account_name' => $faker->account_name,
        'account_email' => $faker->account_email,
        'account_mobileNo' => $faker->account_mobileNo,
        'account_landlineNo' => $faker->account_landlineNo,
        'account_address' => $faker->account_address,
        'account_website' => $faker->account_website,
        'account_city' => $faker->account_city,
        'account_state' => $faker->account_state,
        'account_country' => $faker->account_country,
        'account_pincode' => $faker->account_pincode,
        'account_panNo' => $faker->account_panNo,
        'account_GSTNo' => $faker->account_GSTNo,
    ];
});

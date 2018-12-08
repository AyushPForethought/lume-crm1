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
        'lead_service_code' => $faker->lead_service_code,
        'lead_name' => $faker->lead_name,
        'lead_designation' => $faker->lead_designation,
        'lead_companyName' => $faker->lead_companyName,
        'lead_email' => $faker->lead_email,
        'lead_mobileNo' => $faker->lead_mobileNo,
        'lead_landlineNo' => $faker->lead_landlineNo,
        'lead_address' => $faker->lead_address,
        'lead_city' => $faker->lead_city,
        'lead_state' => $faker->lead_state,
        'lead_country' => $faker->lead_country,
        'lead_pincode' => $faker->lead_pincode,
        'lead_utm_website_url' => $faker->lead_utm_website_url,
        'lead_utm_campaign_source' => $faker->lead_utm_campaign_source,
        'lead_utm_campaign_medium' => $faker->lead_utm_campaign_medium,
        'lead_utm_campaign_name' => $faker->lead_utm_campaign_name,
        'lead_utm_campaign_term' => $faker->lead_utm_campaign_term,
        'lead_utm_campaign_content' => $faker->lead_utm_campaign_content,
        'lead_activity' => $faker->lead_activity,
        'lead_Status' => $faker->lead_Status,
        'lead_Status_Inormation' => $faker->lead_Status_Inormation,
        'lead_Source' => $faker->lead_Source,
        'lead_Source_Inormation' => $faker->lead_Source_Inormation,
        'lead_Created_By_Code' => $faker->lead_Created_By_Code,
        'lead_Amount_Currrency' => $faker->lead_Amount_Currrency,
        'lead_total' => $faker->lead_total,
        'lead_Currency' => $faker->lead_Currency,
        'lead_Location' => $faker->lead_Location,
    ];


});
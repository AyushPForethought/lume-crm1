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
        'campaign_name' => $faker->campaign_name,
        'campaign_type' => $faker->campaign_type,
        'campaign_startDate' => $faker->campaign_startDate,
        'campaign_endDate' => $faker->campaign_endDate,
        'campaign_description' => $faker->campaign_description,
        'campaign_budgetCost' => $faker->campaign_budgetCost,
        'utm_website_url' => $faker->utm_website_url,
        'utm_campaign_source' => $faker->utm_campaign_source,
        'utm_Campaign_Medium' => $faker->utm_Campaign_Medium,
        'utm_campaign_name' => $faker->utm_campaign_name,
        'utm_campaign_term' => $faker->utm_campaign_term,
        'utm_campaign_content' => $faker->utm_campaign_content,
    ];
});
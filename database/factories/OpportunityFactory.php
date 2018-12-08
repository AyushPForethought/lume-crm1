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
        'opportunity_deal_owner' => $faker->opportunity_deal_owner,
        'opportunity_deal_name' => $faker->opportunity_deal_name,
        'opportunity_account_name' => $faker->opportunity_account_name,
        'opportunity_type' => $faker->opportunity_type,
        'opportunity_lead_id' => $faker->opportunity_lead_id,
        'opportunity_campaign_id' => $faker->opportunity_campaign_id,
        'opportunity_contact_id' => $faker->opportunity_contact_id,
        'opportunity_amount' => $faker->opportunity_amount,
        'opportunity_closing_date' => $faker->opportunity_closing_date,
        'opportunity_stage' => $faker->opportunity_stage,
        'opportunity_probability' => $faker->opportunity_probability,
        'opportunity_expected_revenue' => $faker->opportunity_expected_revenue,
        'opportunity_description' => $faker->opportunity_description,
    ];
});
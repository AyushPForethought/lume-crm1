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
// New Fields for Discover
        'account_platform_refid' => $faker->account_platform_refid,
        'account_primary_industry' => $faker->account_primary_industry,
        'account_revenue' => $faker->account_revenue,
        'account_employees' => $faker->account_employees,
        'account_ownership' => $faker->account_ownership,
        'account_businessmodel' => $faker->account_businessmodel,
        'account_address2' => $faker->account_address2,
        'account_county' => $faker->account_county,
        'account_tech_searched' => $faker->account_tech_searched,
        'account_tech_matched' => $faker->account_tech_matched,
        'account_technologies' => $faker->account_technologies,
        'account_advertising' => $faker->account_advertising,
        'account_agencyofrecord' => $faker->account_agencyofrecord,
        'account_audit' => $faker->account_audit,
        'account_bi_bigdata' => $faker->account_bi_bigdata,
        'account_collaboration' => $faker->account_collaboration,
        'account_crm' => $faker->account_crm,
        'account_datamanagement' => $faker->account_datamanagement,
        'account_datastorage' => $faker->account_datastorage,
        'account_ecommerce' => $faker->account_ecommerce,
        'account_enterpriseapps' => $faker->account_enterpriseapps,
        'account_erp' => $faker->account_erp,
        'account_finance' => $faker->account_finance,
        'account_itinfra' => $faker->account_itinfra,
        'account_hr' => $faker->account_hr,
        'account_itsm' => $faker->account_itsm, 
        'account_languages' => $faker->account_languages,
        'account_medical' => $faker->account_medical,
        'account_mobility' => $faker->account_mobility,
        'account_networking' => $faker->account_networking,
        'account_programmingtools' => $faker->account_programmingtools,
        'account_security' => $faker->account_security,
        'account_servers' => $faker->account_servers,
        'account_serviceproviders' => $faker->account_serviceproviders,
        'account_telecommunications' => $faker->account_telecommunications,
        'account_virtualization' => $faker->account_virtualization,
        'account_record_type' => $faker->account_record_type,
        'account_responsible' => $faker->account_responsible,
    ];
});

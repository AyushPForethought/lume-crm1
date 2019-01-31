<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});



$router->group(['prefix'=>'api/v1'], function() use($router){

//start account router
$router->get('/account', 'CRM\AccountController@index');
$router->post('/account', 'CRM\AccountController@store');
$router->get('/account/{id}', 'CRM\AccountController@show');
$router->put('/account/{id}', 'CRM\AccountController@update');
$router->delete('/account/{id}', 'CRM\AccountController@destroy');
$router->get('/account/contact/{accountid}', 'CRM\AccountController@indexAccountContact');


//end account router

//start lead router
$router->get('/lead', 'CRM\LeadController@index');
$router->post('/lead', 'CRM\LeadController@store');
$router->get('/lead/{id}', 'CRM\LeadController@show');
$router->put('/lead/{id}', 'CRM\LeadController@update');
$router->delete('/lead/{id}', 'CRM\LeadController@destroy');
$router->get('/lead/{contactid}/{accountid}', 'CRM\LeadController@indexLeadContactAccount');
// $router->get('/lead/{contactid}/{accountid}',  function(){return 'sfsf';});
// $router->get('/account/contact/{accountid}', function(){return 'sfsf';});
// $router->get('/lead/{contactid}/{accountid}', function(){return 'sfsf';});

//end lead router

//start cmapaign router
$router->get('/campaign', 'CRM\CampaignController@index');
$router->post('/campaign', 'CRM\CampaignController@store');
$router->get('/campaign/{id}', 'CRM\CampaignController@show');
$router->put('/campaign/{id}', 'CRM\CampaignController@update');
$router->delete('/campaign/{id}', 'CRM\CampaignController@destroy');
//end campaign router

//start contact router
$router->get('/contact', 'CRM\ContactController@index');
$router->post('/contact', 'CRM\ContactController@store');
$router->get('/contact/{id}', 'CRM\ContactController@show');
$router->put('/contact/{id}', 'CRM\ContactController@update');
$router->delete('/contact/{id}', 'CRM\ContactController@destroy');
// $router->get('/account/contact/{accountid}', 'CRM\ContactController@indexContactAccount');
// $router->get('/account/contact/{accountid}', function(){return 'sfsf';});
$router->get('a', function(){return 'sfsf';});
//end contact router

//start oppertiunity router
$router->get('/opportunity', 'CRM\OpportunityController@index');
$router->post('/opportunity', 'CRM\OpportunityController@store');
$router->get('/opportunity/{id}', 'CRM\OpportunityController@show');
$router->put('/opportunity/{id}', 'CRM\OpportunityController@update');
$router->delete('/opportunity/{id}', 'CRM\OpportunityController@destroy');
//end oppertiunity router

//start customer router
$router->get('/customer', 'CRM\CustomerController@index');
$router->post('/customer', 'CRM\CustomerController@store');
$router->get('/customer/{id}', 'CRM\CustomerController@show');
$router->put('/customer/{id}', 'CRM\CustomerController@update');
$router->delete('/customer/{id}', 'CRM\CustomerController@destroy');
//end customer router

});

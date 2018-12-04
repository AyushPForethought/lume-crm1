<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
   

    protected $fillable = [
    	
		 	    'campaign_name','campaign_type','campaign_startDate','campaign_endDate','campaign_description','campaign_budgetCost','utm_website_url','utm_campaign_source','utm_Campaign_Medium','utm_campaign_name','utm_campaign_term','utm_campaign_content'
	];

	protected $hidden = [];

	protected $primaryKey = 'campaign_id';

}
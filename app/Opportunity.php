<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{

    protected $fillable = [
		
		'opportunity_deal_owner', 'opportunity_deal_name', 'opportunity_account_name', 'opportunity_type','opportunity_lead_id','opportunity_campaign_id','opportunity_contact_id', 'opportunity_amount', 'opportunity_closing_date', 'opportunity_stage', 'opportunity_probability', 'opportunity_expected_revenue', 'opportunity_description'
	];


	protected $hidden = [];


	protected $primaryKey = 'opportunity_id';


}

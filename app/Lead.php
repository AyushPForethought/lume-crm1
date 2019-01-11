<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
	protected $fillable = [
		
		'lead_service_code','lead_name', 'lead_designation','lead_companyName','lead_email', 'lead_mobileNo', 'lead_landlineNo','lead_address','lead_city','lead_state','lead_country','lead_pincode','lead_utm_website_url','lead_utm_campaign_source','lead_utm_campaign_medium','lead_utm_campaign_name','lead_utm_campaign_term','lead_utm_campaign_content','lead_activity','lead_Status','lead_Status_Inormation','lead_Source','lead_Source_Inormation','lead_Created_By_Code','lead_Amount_Currrency','lead_total','lead_Currency','lead_Location'
	];


	protected $hidden = [];


	protected $primaryKey = 'lead_id';

}
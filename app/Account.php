<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
 
	protected $primaryKey='account_id';
    protected $fillable = [
    	
	'account_name', 'account_website','account_email', 'account_mobileNo', 'account_landlineNo','account_address','account_city','account_state','account_country','account_pincode','account_panNo','account_GSTNo','account_platform_refid','account_primary_industry','account_revenue','account_employees','account_ownership','account_businessmodel','account_address2','account_county','account_tech_searched','account_tech_matched','account_technologies','account_advertising','account_agencyofrecord','account_audit','account_bi_bigdata','account_collaboration','account_crm','account_datamanagement','account_datastorage','account_ecommerce','account_enterpriseapps','account_erp','account_finance','account_itinfra','account_hr','account_itsm','account_languages','account_medical','account_mobility','account_networking','account_programmingtools','account_security','account_servers','account_serviceproviders','account_telecommunications','account_virtualization','account_record_type','account_responsible'
	];

	protected $hidden = [];

	public function contact()
	{
		// return 'hi';
		return $this->hasMany('App\Contact','contact_account_id');
		// return $this->hasMany('App\Contact');
	}
}

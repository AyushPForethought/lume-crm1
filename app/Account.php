<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
 
    
    protected $fillable = [
    	
	'account_name', 'account_website','account_email', 'account_mobileNo', 'account_landlineNo','account_address','account_city','account_website','account_state','account_country','account_pincode','account_panNo','account_GSTNo'
	];

	protected $hidden = [];

}

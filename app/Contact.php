<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $fillable = [
    	
        'contact_type','contact_name','contact_email','contact_mobileNo','contact_landlineNo','contact_companyID','contact_companyName','contact_designation','contact_account_id',
    ];

    protected $hidden = [];

    protected $primaryKey = 'contact_id';

    public function account()
	{
		// return 'hi';
		// return $this->belongsTo('App\Account','contact_account_id');
		return $this->belongsTo('App\Account','contact_account_id','account_id');
		// return $this->hasMany('App\Contact');
	}

}
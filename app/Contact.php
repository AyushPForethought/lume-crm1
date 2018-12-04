<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $fillable = [
    	
        'contact_type','contact_name','contact_email','contact_mobileNo','contact_landlineNo','contact_companyID','contact_companyName','contact_designation'
    ];

    protected $hidden = [];

    protected $primaryKey = 'contact_id';


}
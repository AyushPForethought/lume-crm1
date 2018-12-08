<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AccountResorces extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        
        return [

            'account_name' => $this->account_name,
            'account_website' => $this->account_website,
            'account_email' => $this->account_email,
            'account_mobileNo' => $this->account_mobileNo,
            'account_landlineNo' => $this->account_landlineNo,
            'account_landlineNo' => $this->account_landlineNo,
            'account_city' => $this->account_city,
            'account_state' => $this->account_state,
            'account_country' => $this->account_country,
            'account_pincode' => $this->account_pincode,
            'account_panNo' => $this->account_panNo,
            'account_GSTNo' => $this->account_GSTNo
           
        ];

    }
}

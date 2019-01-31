<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
// use App\Http\Resources\AccountResources;
use App\Http\Resources\AccountResorces;


class ContactResources extends JsonResource
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
            'contact_id' => $this->contact_id,
            'contact_type' => $this->contact_type,
            'contact_name' => $this->contact_name,
            'contact_email' => $this->contact_email,
            'contact_mobileNo' => $this->contact_mobileNo,
            'contact_landlineNo' => $this->contact_landlineNo,
            'contact_companyID' => $this->contact_companyID,
            'contact_companyName' => $this->contact_companyName,
            'contact_designation' => $this->contact_designation,
            'contact_account_id' => $this->contact_account_id,
            // 'account_id' => AccountResorces::collection($this->account),
            // 'account' => new AccountResorces($this->account),
        ];

    }
}

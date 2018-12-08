<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeadResources extends JsonResource
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

            'lead_service_code' => $this->lead_service_code,
            'lead_name' => $this->lead_name,
            'lead_designation' => $this->lead_designation,
            'lead_companyName' => $this->lead_companyName,
            'lead_email' => $this->lead_email,
            'lead_mobileNo' => $this->lead_mobileNo,
            'lead_landlineNo' => $this->lead_landlineNo,
            'lead_address' => $this->lead_address,
            'lead_city' => $this->lead_city,
            'lead_state'  => $this->lead_state,
            'lead_country' => $this->lead_country,
            'lead_pincode' => $this->lead_pincode,
            'lead_utm_website_url' => $this->lead_utm_website_url,
            'lead_utm_campaign_source' => $this->lead_utm_campaign_source,
            'lead_utm_campaign_medium' => $this->lead_utm_campaign_medium,
            'lead_utm_campaign_name' => $this->lead_utm_campaign_name,
            'lead_utm_campaign_term' => $this->lead_utm_campaign_term,
            'lead_utm_campaign_content' => $this->lead_utm_campaign_content,
            'lead_activity' => $this->lead_activity,
            'lead_Status' => $this->lead_Status,
            'lead_Status_Inormation' => $this->lead_Status_Inormation,
            'lead_Source' =>$this->lead_Source,
            'lead_Source_Inormation' =>$this->lead_Source_Inormation,
            'lead_Created_By_Code'  =>$this->lead_Created_By_Code,
            'lead_Amount_Currrency' =>$this->lead_Amount_Currrency,
            'lead_Location' =>$this->lead_Location
        ];

    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CampaignResources extends JsonResource
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

            'campaign_name' => $this->campaign_name,
            'campaign_type' => $this->campaign_type,
            'campaign_startDate' => $this->campaign_startDate,
            'campaign_endDate' => $this->campaign_endDate,
            'campaign_description' => $this->campaign_description,
            'campaign_budgetCost' => $this->campaign_budgetCost,
            'utm_website_url' => $this->utm_website_url,
            'utm_campaign_source' => $this->utm_campaign_source,
            'utm_Campaign_Medium' => $this->utm_Campaign_Medium,
            'utm_campaign_name'  => $this->utm_campaign_name,
            'utm_campaign_term' => $this->utm_campaign_term,
            'utm_campaign_content' => $this->utm_campaign_content
        ];

    }
}

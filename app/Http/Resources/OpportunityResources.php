<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OpportunityResources extends JsonResource
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

            'opportunity_deal_owner' => $this->opportunity_deal_owner,
            'opportunity_deal_name' => $this->opportunity_deal_name,
            'opportunity_account_name' => $this->opportunity_account_name,
            'opportunity_type' => $this->opportunity_type,
            'opportunity_lead_id' => $this->opportunity_lead_id,
            'opportunity_campaign_id' => $this->opportunity_campaign_id,
            'opportunity_contact_id' => $this->opportunity_contact_id,
            'opportunity_amount' => $this->opportunity_amount,
            'opportunity_closing_date' => $this->opportunity_closing_date,
            'opportunity_stage'  => $this->opportunity_stage,
            'opportunity_probability' => $this->opportunity_probability,
            'opportunity_expected_revenue' => $this->opportunity_expected_revenue,
            'opportunity_description' => $this->opportunity_description
           
        ];

    }
}

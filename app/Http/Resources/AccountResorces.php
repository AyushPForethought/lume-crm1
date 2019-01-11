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

            'account_id' => $this->id,
            'account_name' => $this->account_name,
            'account_website' => $this->account_website,
            'account_email' => $this->account_email,
            'account_mobileNo' => $this->account_mobileNo,
            'account_landlineNo' => $this->account_landlineNo,
            'account_address' => $this->account_address,
            'account_city' => $this->account_city,
            'account_state' => $this->account_state,
            'account_country' => $this->account_country,
            'account_pincode' => $this->account_pincode,
            'account_panNo' => $this->account_panNo,
            'account_GSTNo' => $this->account_GSTNo,
// New Fields for Discover
            'account_platform_refid' => $this->account_platform_refid,
            'account_primary_industry' => $this->account_primary_industry,
            'account_revenue' => $this->account_revenue,
            'account_employees' => $this->account_employees,
            'account_ownership' => $this->account_ownership,
            'account_businessmodel' => $this->account_businessmodel,
            'account_address2' => $this->account_address2,
            'account_county' => $this->account_county,
            'account_tech_searched' => $this->account_tech_searched,
            'account_tech_matched' => $this->account_tech_matched,
            'account_technologies' => $this->account_technologies,
            'account_advertising' => $this->account_advertising,
            'account_agencyofrecord' => $this->account_agencyofrecord,
            'account_audit' => $this->account_audit,
            'account_bi_bigdata' => $this->account_bi_bigdata,
            'account_collaboration' => $this->account_collaboration,
            'account_crm' => $this->account_crm,
            'account_datamanagement' => $this->account_datamanagement,
            'account_datastorage' => $this->account_datastorage,
            'account_ecommerce' => $this->account_ecommerce,
            'account_enterpriseapps' => $this->account_enterpriseapps,
            'account_erp' => $this->account_erp,
            'account_finance' => $this->account_finance,
            'account_itinfra' => $this->account_itinfra,
            'account_hr' => $this->account_hr,
            'account_itsm' => $this->account_itsm, 
            'account_languages' => $this->account_languages,
            'account_medical' => $this->account_medical,
            'account_mobility' => $this->account_mobility,
            'account_networking' => $this->account_networking,
            'account_programmingtools' => $this->account_programmingtools,
            'account_security' => $this->account_security,
            'account_servers' => $this->account_servers,
            'account_serviceproviders' => $this->account_serviceproviders,
            'account_telecommunications' => $this->account_telecommunications,
            'account_virtualization' => $this->account_virtualization,
            'account_record_type' => $this->account_record_type,
            'account_responsible' => $this->account_responsible
           
        ];

    }
}

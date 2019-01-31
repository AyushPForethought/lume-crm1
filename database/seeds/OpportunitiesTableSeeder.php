<?php

use App\Opportunity;
use Illuminate\Database\Seeder;

class OpportunitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $opportunities = new Opportunity;
       $opportunities->opportunity_deal_owner='sandip gupta';
       $opportunities->opportunity_deal_name='helpdesk';
       $opportunities->opportunity_account_name='forethought';
       $opportunities->opportunity_type='web developement';
       $opportunities->opportunity_lead_id='12';
       $opportunities->opportunity_campaign_id='23';
       $opportunities->opportunity_contact_id='87';
       $opportunities->opportunity_amount='2 lackhs';
       $opportunities->opportunity_closing_date='31-01-2019';
       $opportunities->opportunity_stage='completed';
       $opportunities->opportunity_probability='good';
       $opportunities->opportunity_expected_revenue='10 lackhs';
       $opportunities->opportunity_description='helpdesk is using for ticket';  
       $opportunities->save();

       $opportunities = new Opportunity;
       $opportunities->opportunity_deal_owner='ayush patel';
       $opportunities->opportunity_deal_name='groovenexus';
       $opportunities->opportunity_account_name='Forethought';
       $opportunities->opportunity_type='core php devellopement';
       $opportunities->opportunity_lead_id='11';
       $opportunities->opportunity_campaign_id='22';
       $opportunities->opportunity_contact_id='86';
       $opportunities->opportunity_amount='2 lackhs';
       $opportunities->opportunity_closing_date='15-02-2019';
       $opportunities->opportunity_stage='in progress';
       $opportunities->opportunity_probability='good';
       $opportunities->opportunity_expected_revenue='10 lackhs';
       $opportunities->opportunity_description='grooveneus is the project of forethought';  
       $opportunities->save();


       $opportunities = new Opportunity;
       $opportunities->opportunity_deal_owner='Digvijay Dubey';
       $opportunities->opportunity_deal_name='samvit project';
       $opportunities->opportunity_account_name='forethought';
       $opportunities->opportunity_type='wordpress developement';
       $opportunities->opportunity_lead_id='25';
       $opportunities->opportunity_campaign_id='28';
       $opportunities->opportunity_contact_id='87';
       $opportunities->opportunity_amount='1 lackhs';
       $opportunities->opportunity_closing_date='20-02-2019';
       $opportunities->opportunity_stage='in progress';
       $opportunities->opportunity_probability='average';
       $opportunities->opportunity_expected_revenue='5 lackhs';
       $opportunities->opportunity_description='samvit is the website of RSS';  
       $opportunities->save();


       $opportunities = new Opportunity;
       $opportunities->opportunity_deal_owner='Khusi Jain';
       $opportunities->opportunity_deal_name='Mastech infotrellis';
       $opportunities->opportunity_account_name='the Higher pitch';
       $opportunities->opportunity_type='wordpress developement';
       $opportunities->opportunity_lead_id='30';
       $opportunities->opportunity_campaign_id='30';
       $opportunities->opportunity_contact_id='88';
       $opportunities->opportunity_amount='15 lackhs';
       $opportunities->opportunity_closing_date='03-03-2019';
       $opportunities->opportunity_stage='in progress';
       $opportunities->opportunity_probability='good';
       $opportunities->opportunity_expected_revenue='30 lackhs';
       $opportunities->opportunity_description='Mastech Infotrellis is one of the best company in U.S.';  
       $opportunities->save();


       $opportunities = new Opportunity;
       $opportunities->opportunity_deal_owner='Arjun Bajrangi';
       $opportunities->opportunity_deal_name='Accounts of Both companies';
       $opportunities->opportunity_account_name='The Higher Pitch';
       $opportunities->opportunity_type='Accounts';
       $opportunities->opportunity_lead_id='31';
       $opportunities->opportunity_campaign_id='19';
       $opportunities->opportunity_contact_id='90';
       $opportunities->opportunity_amount='10 lackhs';
       $opportunities->opportunity_closing_date='04-10-2019';
       $opportunities->opportunity_stage='start';
       $opportunities->opportunity_probability='good';
       $opportunities->opportunity_expected_revenue='20 lackhs';
       $opportunities->opportunity_description='this is for the account Developement';  
       $opportunities->save();


       // $opportunities = new Opportunity;
       // $opportunities->opportunity_deal_owner='';
       // $opportunities->opportunity_deal_name='';
       // $opportunities->opportunity_account_name='';
       // $opportunities->opportunity_type='';
       // $opportunities->opportunity_lead_id='';
       // $opportunities->opportunity_campaign_id='';
       // $opportunities->opportunity_contact_id='';
       // $opportunities->opportunity_amount='';
       // $opportunities->opportunity_closing_date='';
       // $opportunities->opportunity_stage='';
       // $opportunities->opportunity_probability='';
       // $opportunities->opportunity_expected_revenue='';
       // $opportunities->opportunity_description='';  
       // $opportunities->save();


       // $opportunities = new Opportunity;
       // $opportunities->opportunity_deal_owner='';
       // $opportunities->opportunity_deal_name='';
       // $opportunities->opportunity_account_name='';
       // $opportunities->opportunity_type='';
       // $opportunities->opportunity_lead_id='';
       // $opportunities->opportunity_campaign_id='';
       // $opportunities->opportunity_contact_id='';
       // $opportunities->opportunity_amount='';
       // $opportunities->opportunity_closing_date='';
       // $opportunities->opportunity_stage='';
       // $opportunities->opportunity_probability='';
       // $opportunities->opportunity_expected_revenue='';
       // $opportunities->opportunity_description='';  
       // $opportunities->save();

       // $opportunities = new Opportunity;
       // $opportunities->opportunity_deal_owner='';
       // $opportunities->opportunity_deal_name='';
       // $opportunities->opportunity_account_name='';
       // $opportunities->opportunity_type='';
       // $opportunities->opportunity_lead_id='';
       // $opportunities->opportunity_campaign_id='';
       // $opportunities->opportunity_contact_id='';
       // $opportunities->opportunity_amount='';
       // $opportunities->opportunity_closing_date='';
       // $opportunities->opportunity_stage='';
       // $opportunities->opportunity_probability='';
       // $opportunities->opportunity_expected_revenue='';
       // $opportunities->opportunity_description='';  
       // $opportunities->save();

       // $opportunities = new Opportunity;
       // $opportunities->opportunity_deal_owner='';
       // $opportunities->opportunity_deal_name='';
       // $opportunities->opportunity_account_name='';
       // $opportunities->opportunity_type='';
       // $opportunities->opportunity_lead_id='';
       // $opportunities->opportunity_campaign_id='';
       // $opportunities->opportunity_contact_id='';
       // $opportunities->opportunity_amount='';
       // $opportunities->opportunity_closing_date='';
       // $opportunities->opportunity_stage='';
       // $opportunities->opportunity_probability='';
       // $opportunities->opportunity_expected_revenue='';
       // $opportunities->opportunity_description='';  
       // $opportunities->save();


       // $opportunities = new Opportunity;
       // $opportunities->opportunity_deal_owner='';
       // $opportunities->opportunity_deal_name='';
       // $opportunities->opportunity_account_name='';
       // $opportunities->opportunity_type='';
       // $opportunities->opportunity_lead_id='';
       // $opportunities->opportunity_campaign_id='';
       // $opportunities->opportunity_contact_id='';
       // $opportunities->opportunity_amount='';
       // $opportunities->opportunity_closing_date='';
       // $opportunities->opportunity_stage='';
       // $opportunities->opportunity_probability='';
       // $opportunities->opportunity_expected_revenue='';
       // $opportunities->opportunity_description='';  
       // $opportunities->save();


    }
}

<?php

use App\Campaign;

use Illuminate\Database\Seeder;

class CampaignsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campaigns = new Campaign;
        $campaigns->campaign_name='GrooveNexus';
        $campaigns->campaign_type='Music Fest';
        $campaigns->campaign_description='GrooveNexus is Music event which is going to held in DTU(Delhi Technical University)';
        $campaigns->campaign_startDate='15-02-2019';
        $campaigns->campaign_endDate='17-02-2019';
        $campaigns->campaign_budgetCost='20 Lackhs';
        $campaigns->utm_website_url='www.groovenexus.com';
        $campaigns->utm_campaign_source='Forethought';
        $campaigns->utm_Campaign_Medium='Himanshu Mishra';
        $campaigns->utm_campaign_name='GrooveNexus';
        $campaigns->utm_campaign_term='campaign term';
        $campaigns->utm_campaign_content='Groovenexus is a music event';       
        $campaigns->save();

        $campaigns = new Campaign;
        $campaigns->campaign_name='Engi-Fest';
        $campaigns->campaign_type='Music event';
        $campaigns->campaign_description='engi-fest is the part of the GrooveNexus';
        $campaigns->campaign_startDate='15-02-2019';
        $campaigns->campaign_endDate='17-02-2019';
        $campaigns->campaign_budgetCost='5 Lackhs';
        $campaigns->utm_website_url='www.engifest.com';
        $campaigns->utm_campaign_source='the higher pitch';
        $campaigns->utm_Campaign_Medium='Nishant Mishra';
        $campaigns->utm_campaign_name='engi-fest';
        $campaigns->utm_campaign_term='campaign-term';
        $campaigns->utm_campaign_content='UTM Campaign Content  is going to use in the GrooveNexus';       
        $campaigns->save();


       //  $campaigns = new Campaign;
       //  $campaigns->campaign_name='';
       //  $campaigns->campaign_type='';
       //  $campaigns->campaign_description='';
       //  $campaigns->campaign_startDate='';
       //  $campaigns->campaign_endDate='';
       //  $campaigns->campaign_budgetCost='';
       //  $campaigns->utm_website_url='';
       //  $campaigns->utm_campaign_source='';
       //  $campaigns->utm_Campaign_Medium='';
       //  $campaigns->utm_campaign_name='';
       //  $campaigns->utm_campaign_term='';
       //  $campaigns->utm_campaign_content='';       
       //  $campaigns->save();


       //  $campaigns = new Campaign;
       //  $campaigns->campaign_name='';
       //  $campaigns->campaign_type='';
       //  $campaigns->campaign_description='';
       //  $campaigns->campaign_startDate='';
       //  $campaigns->campaign_endDate='';
       //  $campaigns->campaign_budgetCost='';
       //  $campaigns->utm_website_url='';
       //  $campaigns->utm_campaign_source='';
       //  $campaigns->utm_Campaign_Medium='';
       //  $campaigns->utm_campaign_name='';
       //  $campaigns->utm_campaign_term='';
       //  $campaigns->utm_campaign_content='';       
       //  $campaigns->save();



       //  $campaigns = new Campaign;
       //  $campaigns->campaign_name='';
       //  $campaigns->campaign_type='';
       //  $campaigns->campaign_description='';
       //  $campaigns->campaign_startDate='';
       //  $campaigns->campaign_endDate='';
       //  $campaigns->campaign_budgetCost='';
       //  $campaigns->utm_website_url='';
       //  $campaigns->utm_campaign_source='';
       //  $campaigns->utm_Campaign_Medium='';
       //  $campaigns->utm_campaign_name='';
       //  $campaigns->utm_campaign_term='';
       //  $campaigns->utm_campaign_content='';       
       //  $campaigns->save();



       //  $campaigns = new Campaign;
       //  $campaigns->campaign_name='';
       //  $campaigns->campaign_type='';
       //  $campaigns->campaign_description='';
       //  $campaigns->campaign_startDate='';
       //  $campaigns->campaign_endDate='';
       //  $campaigns->campaign_budgetCost='';
       //  $campaigns->utm_website_url='';
       //  $campaigns->utm_campaign_source='';
       //  $campaigns->utm_Campaign_Medium='';
       //  $campaigns->utm_campaign_name='';
       //  $campaigns->utm_campaign_term='';
       //  $campaigns->utm_campaign_content='';       
       //  $campaigns->save();



       //  $campaigns = new Campaign;
       //  $campaigns->campaign_name='';
       //  $campaigns->campaign_type='';
       //  $campaigns->campaign_description='';
       //  $campaigns->campaign_startDate='';
       //  $campaigns->campaign_endDate='';
       //  $campaigns->campaign_budgetCost='';
       //  $campaigns->utm_website_url='';
       //  $campaigns->utm_campaign_source='';
       //  $campaigns->utm_Campaign_Medium='';
       //  $campaigns->utm_campaign_name='';
       //  $campaigns->utm_campaign_term='';
       //  $campaigns->utm_campaign_content='';       
       //  $campaigns->save();



       // $campaigns = new Campaign;
       //  $campaigns->campaign_name='';
       //  $campaigns->campaign_type='';
       //  $campaigns->campaign_description='';
       //  $campaigns->campaign_startDate='';
       //  $campaigns->campaign_endDate='';
       //  $campaigns->campaign_budgetCost='';
       //  $campaigns->utm_website_url='';
       //  $campaigns->utm_campaign_source='';
       //  $campaigns->utm_Campaign_Medium='';
       //  $campaigns->utm_campaign_name='';
       //  $campaigns->utm_campaign_term='';
       //  $campaigns->utm_campaign_content='';       
       //  $campaigns->save();



       //  $campaigns = new Campaign;
       //  $campaigns->campaign_name='';
       //  $campaigns->campaign_type='';
       //  $campaigns->campaign_description='';
       //  $campaigns->campaign_startDate='';
       //  $campaigns->campaign_endDate='';
       //  $campaigns->campaign_budgetCost='';
       //  $campaigns->utm_website_url='';
       //  $campaigns->utm_campaign_source='';
       //  $campaigns->utm_Campaign_Medium='';
       //  $campaigns->utm_campaign_name='';
       //  $campaigns->utm_campaign_term='';
       //  $campaigns->utm_campaign_content='';       
       //  $campaigns->save();



       //  $campaigns = new Campaign;
       //  $campaigns->campaign_name='';
       //  $campaigns->campaign_type='';
       //  $campaigns->campaign_description='';
       //  $campaigns->campaign_startDate='';
       //  $campaigns->campaign_endDate='';
       //  $campaigns->campaign_budgetCost='';
       //  $campaigns->utm_website_url='';
       //  $campaigns->utm_campaign_source='';
       //  $campaigns->utm_Campaign_Medium='';
       //  $campaigns->utm_campaign_name='';
       //  $campaigns->utm_campaign_term='';
       //  $campaigns->utm_campaign_content='';       
       //  $campaigns->save();



       //  $campaigns = new Campaign;
       //  $campaigns->campaign_name='';
       //  $campaigns->campaign_type='';
       //  $campaigns->campaign_description='';
       //  $campaigns->campaign_startDate='';
       //  $campaigns->campaign_endDate='';
       //  $campaigns->campaign_budgetCost='';
       //  $campaigns->utm_website_url='';
       //  $campaigns->utm_campaign_source='';
       //  $campaigns->utm_Campaign_Medium='';
       //  $campaigns->utm_campaign_name='';
       //  $campaigns->utm_campaign_term='';
       //  $campaigns->utm_campaign_content='';       
       //  $campaigns->save();
    }
}

<?php

namespace App\Http\Controllers\CRM;

use App\Campaign;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CampaignResources;

class CampaignController extends Controller
{
    

    public function index()

    {
     
       $camapigns = Campaign::all();
       // return response()->json($camapigns);
        return CampaignResources::collection(Campaign::paginate('10'));
    }


     public function store(Request $request)

     {

        
        // $campaign = Campaign::create($request->all());
 
        // return response()->json($campaign, 201);
 

        $campaign = new Campaign;
        $campaign->campaign_name=$request['campaign_name'];
        $campaign->campaign_type=$request['campaign_type'];
        $campaign->campaign_description=$request['campaign_description'];
        $campaign->campaign_startDate=$request['campaign_startDate'];
        $campaign->campaign_endDate=$request['campaign_endDate'];
        $campaign->campaign_description=$request['campaign_description'];
        $campaign->campaign_budgetCost=$request['campaign_budgetCost'];
        $campaign->utm_website_url=$request['utm_website_url'];
        $campaign->utm_campaign_source=$request['utm_campaign_source'];
        $campaign->utm_Campaign_Medium=$request['utm_Campaign_Medium'] ;
        $campaign->utm_campaign_name=$request['utm_campaign_name'];
        $campaign->utm_campaign_term=$request['utm_campaign_term'];
        $campaign->utm_campaign_content=$request['utm_campaign_content'];
        $campaign->save();
        return response()->json($campaign);

     }

     public function show($id)

     {
         $campaign = Campaign::find($id);
         return response()->json($campaign);


     }

     public function update(Request $request, $id)

     { 
        $campaign= Campaign::find($id);
        $campaign->campaign_name= $request->input('campaign_name');
        $campaign->campaign_type = $request->input('campaign_type');
        $campaign->campaign_description = $request->input('campaign_description');
        $campaign->campaign_startDate = $request->input('campaign_startDate');
        $campaign->campaign_endDate = $request->input('campaign_endDate');
        $campaign->campaign_description = $request->input('campaign_description');
        $campaign->campaign_budgetCost = $request->input('campaign_budgetCost');
        $campaign->utm_website_url  = $request->input('utm_website_url');
        $campaign->utm_campaign_source = $request->input('utm_campaign_source');
        $campaign->utm_Campaign_Medium = $request->input('utm_Campaign_Medium ');
        $campaign->utm_campaign_name= $request->input('utm_campaign_name');
        $campaign->utm_campaign_term = $request->input('utm_campaign_term');
        $campaign->utm_campaign_content   = $request->input('utm_campaign_content ');
        $campaign->save();
        return response()->json($campaign);
    
     }


     public function destroy($id)
     {
       
         $campaign = Campaign::find($id);
         $campaign->delete();
         return response()->json('campaign removed successfully');
     }

}

<?php

namespace App\Http\Controllers\CRM;

use App\Opportunity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OpportunityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    public function index()

    {
     
      $opportunities =Opportunity::all();
      return response()->json($opportunities);

    }


     public function create(Request $request)

     { 
        $opportunity = new Opportunity;
        $opportunity->opportunities_deal_owner = $request->opportunity_deal_owner;
        $opportunity->opportunities_account_name = $request->opportunity_account_name;
        $opportunity->opportunities_type = $request->opportunity_type;
        $opportunity->opportunities_lead_id = $request->opportunity_lead_id;
        $opportunity->opportunities_campaign_id = $request->opportunity_campaign_id;
        $opportunity->opportunities_contact_id = $request->opportunity_contact_id;
        $opportunity->opportunities_amount = $request->opportunity_amount;
        $opportunity->opportunities_closing_date = $request->opportunity_closing_date;
        $opportunity->opportunities_stage = $request->opportunity_stage;
        $opportunity->opportunities_probability = $request->opportunity_probability;
        $opportunity->opportunities_expected_revenue = $request->opportunity_expected_revenue;
        $opportunity->opportunities_description = $request->opportunity_description;
       
        $opportunity->save();
        return response()->json($opportunity);

     }


     public function show($id)

     {
         $opportunity = Opportunity::find($id);
         return response()->json($opportunity);
     }


     public function update(Request $request, $id)

     {     
        $opportunity= Opportunity::find($id);
        $opportunity->opportunity_deal_owner = $request->input('opportunity_deal_owner');
        $opportunity->opportunity_account_name = $request->input('opportunity_account_name');
        $opportunity->opportunity_type = $request->input('opportunity_type');
        $opportunity->opportunity_lead_id = $request->input('opportunity_lead_id');
        $opportunity->opportunity_campaign_id = $request->input('opportunity_campaign_id');
        $opportunity->opportunity_contact_id = $request->input('opportunity_contact_id');
        $opportunity->opportunity_amount = $request->input('opportunity_amount');
        $opportunity->opportunity_closing_date = $request->input('opportunity_closing_date');
        $opportunity->opportunity_stage = $request->input('opportunity_stage');
        $opportunity->opportunity_probability = $request->input('opportunity_probability');
        $opportunity->opportunity_expected_revenue = $request->input('opportunity_expected_revenue');
        $opportunity->opportunity_description = $request->input('opportunity_description');
      
        $opportunity->save();
        return response()->json($opportunity);
      
     }

     public function destroy($id)

     {  
         $opportunity =Opportunity::find($id);
         $opportunity->delete();
         return response()->json('lead removed successfully');
     }


   
}

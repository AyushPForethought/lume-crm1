<?php

namespace App\Http\Controllers\CRM;

use App\Lead;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\LeadResources;

class LeadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
      $leads = Lead::all();
      // return response()->json($leads);
      return LeadResources::collection(Lead::paginate('100'));
    }

    public function indexLeadContactAccount($contactid,$accountid)
    {
      $whereData = array(array('lead_account_id',$accountid), array('lead_contact_id',$contactid));
      $leads = Lead::where($whereData)->get();
      return response()->json($leads);
    }


     public function store(Request $request)

     { 


        // $lead = Lead::create($request->all());
        // return response()->json($lead, 201);

        $lead = new Lead;
        $lead->lead_service_code = $request['lead_service_code'];
        $lead->lead_name = $request['lead_name'];
        $lead->lead_designation = $request['lead_designation'];
        $lead->lead_companyName = $request['lead_companyName'];
        $lead->lead_email = $request['lead_email'];
        $lead->lead_mobileNo = $request['lead_mobileNo'];
        $lead->lead_landlineNo = $request['lead_landlineNo'];
        $lead->lead_address = $request['lead_address'];
        $lead->lead_city = $request['lead_city'];
        $lead->lead_state = $request['lead_state'];
        $lead->lead_country = $request['lead_country'];
        $lead->lead_pincode = $request['lead_pincode'];
        $lead->lead_utm_website_url = $request['lead_utm_website_url'];
        $lead->lead_utm_campaign_source = $request['lead_utm_campaign_source'];
        $lead->lead_utm_campaign_medium = $request['lead_utm_campaign_medium'];
        $lead->lead_utm_campaign_name = $request['lead_utm_campaign_name'];
        $lead->lead_utm_campaign_term = $request['lead_utm_campaign_term'];
        $lead->lead_utm_campaign_content = $request['lead_utm_campaign_content'];
        $lead->lead_activity = $request['lead_activity'];
        $lead->lead_Status = $request['lead_Status'];
        $lead->lead_Status_Inormation = $request['lead_Status_Inormation'];
        $lead->lead_Source = $request['lead_Source'];
        $lead->lead_Source_Inormation = $request['lead_Source_Inormation'];
        $lead->lead_Created_By_Code = $request['lead_Created_By_Code'];
        $lead->lead_Amount_Currrency = $request['lead_Amount_Currrency'];
        $lead->lead_total=$request['lead_total'];
        $lead->lead_Currency=$request['lead_Currency'];
        $lead->lead_Location=$request['lead_Location'];
        $lead->lead_contact_id=$request['lead_contact_id'];
        $lead->lead_account_id=$request['lead_account_id'];
        $lead->save();
        return response()->json($lead);

     }


     public function show($id)

     {
         $lead = Lead::find($id);
         return response()->json($lead);
     }


     public function update(Request $request, $id)

     {     
        $lead= Lead::find($id);
        $lead->lead_service_code = $request->input('lead_service_code');
        $lead->lead_name = $request->input('lead_name');
        $lead->lead_designation = $request->input('lead_designation');
        $lead->lead_companyName = $request->input('lead_companyName');
        $lead->lead_email = $request->input('lead_email');
        $lead->lead_mobileNo = $request->input('lead_mobileNo');
        $lead->lead_landlineNo = $request->input('lead_landlineNo');
        $lead->lead_address = $request->input('lead_address');
        $lead->lead_city = $request->input('lead_city');
        $lead->lead_state = $request->input('lead_state');
        $lead->lead_country = $request->input('lead_country');
        $lead->lead_pincode = $request->input('lead_pincode');
        $lead->lead_utm_website_url = $request->input('lead_utm_website_url');
        $lead->lead_utm_campaign_source = $request->input('lead_utm_campaign_source');
        $lead->lead_utm_campaign_medium = $request->input('lead_utm_campaign_medium');
        $lead->lead_utm_campaign_name = $request->input('lead_utm_campaign_name');
        $lead->lead_utm_campaign_term = $request->input('lead_utm_campaign_term');
        $lead->lead_utm_campaign_content = $request->input('lead_utm_campaign_content');
        $lead->lead_activity = $request->input('lead_activity');
        $lead->lead_Status = $request->input('lead_Status');
        $lead->lead_Status_Inormation = $request->input('lead_Status_Inormation');
        $lead->lead_Source = $request->input('lead_Source');
        $lead->lead_Source_Inormation = $request->input('lead_Source_Inormation');
        $lead->lead_Created_By_Code = $request->input('lead_Created_By_Code');
        $lead->lead_Amount_Currrency = $request->input('lead_Amount_Currrency');
        $lead->lead_total = $request->input('lead_total');
        $lead->lead_Currency = $request->input('lead_Currency');
        $lead->lead_Location = $request->input('lead_Location');
        $lead->save();
        return response()->json($lead);
      
     }

     public function destroy($id)

     {  
         $lead = Lead::find($id);
         $lead->delete();
         return response()->json('lead removed successfully');
     }


}

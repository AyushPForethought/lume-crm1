<?php

namespace App\Http\Controllers\CRM;

use App\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AccountResorces;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()

    { 
      $accounts = Account::all();
      // return response()->json($accounts);
      return AccountResorces::collection(Account::paginate('100'));
    }


     public function store(Request $request)

     { 


        // $account = Account::create($request->all());
 
        // return response()->json($account, 201);
 

        
        $account = new Account;
        $account->account_name=$request['account_name'];
        $account->account_email=$request['account_email'];
        $account->account_mobileNo=$request['account_mobileNo'];
        $account->account_landlineNo=$request['account_landlineNo'];
        $account->account_address=$request['account_address'];
        $account->account_website=$request['account_website'];
        $account->account_city=$request['account_city'];
        $account->account_state=$request['account_state'];
        $account->account_country=$request['account_country'];
        $account->account_pincode=$request['account_pincode'];
        $account->account_panNo=$request['account_panNo'];
        $account->account_GSTNo=$request['account_GSTNo'];
// New Fields for Discover
        $account->account_platform_refid=$request['account_platform_refid'];
        $account->account_primary_industry=$request['account_primary_industry'];
        $account->account_revenue=$request['account_revenue'];
        $account->account_employees=$request['account_employees'];
        $account->account_ownership=$request['account_ownership'];
        $account->account_businessmodel=$request['account_businessmodel'];
        $account->account_address2=$request['account_address2'];
        $account->account_county=$request['account_county'];
        $account->account_tech_searched=$request['account_tech_searched'];
        $account->account_tech_matched=$request['account_tech_matched'];
        $account->account_technologies=$request['account_technologies'];
        $account->account_advertising=$request['account_advertising'];
        $account->account_agencyofrecord=$request['account_agencyofrecord'];
        $account->account_audit=$request['account_audit'];
        $account->account_bi_bigdata=$request['account_bi_bigdata'];
        $account->account_collaboration=$request['account_collaboration'];
        $account->account_crm=$request['account_crm'];
        $account->account_datamanagement=$request['account_datamanagement'];
        $account->account_datastorage=$request['account_datastorage'];
        $account->account_ecommerce=$request['account_ecommerce'];
        $account->account_enterpriseapps=$request['account_enterpriseapps'];
        $account->account_erp=$request['account_erp'];
        $account->account_finance=$request['account_finance'];
        $account->account_itinfra=$request['account_itinfra'];
        $account->account_hr=$request['account_hr'];
        $account->account_itsm=$request['account_itsm'];
        $account->account_languages=$request['account_languages'];
        $account->account_medical=$request['account_medical'];
        $account->account_mobility=$request['account_mobility'];
        $account->account_networking=$request['account_networking'];
        $account->account_programmingtools=$request['account_programmingtools'];
        $account->account_security=$request['account_security'];
        $account->account_servers=$request['account_servers'];
        $account->account_serviceproviders=$request['account_serviceproviders'];
        $account->account_telecommunications=$request['account_telecommunications'];
        $account->account_virtualization=$request['account_virtualization'];
        $account->account_record_type=$request['account_record_type'];
        $account->account_responsible=$request['account_responsible'];
        $account->save();
        return response()->json($account, 201);

     }



     public function show($id)

     {
        $account = Account::find($id);
        return response()->json($account);
     }


     public function update(Request $request, $id)

     {  
        $account= Account::find($id);
        $account->account_name = $request->input('account_name');
        $account->account_email = $request->input('account_email');
        $account->account_mobileNo = $request->input('account_mobileNo');
        $account->account_landlineNo = $request->input('account_landlineNo');
        $account->account_address = $request->input('account_address');
        $account->account_website = $request->input('account_website');
        $account->account_city = $request->input('account_city');
        $account->account_state = $request->input('account_state');
        $account->account_country = $request->input('account_country');
        $account->account_pincode = $request->input('account_pincode');
        $account->account_panNo = $request->input('account_panNo');
        $account->account_GSTNo = $request->input('account_GSTNo');
// New Fields for Discover
        $account->account_platform_refid = $request->input('account_platform_refid');
        $account->account_primary_industry = $request->input('account_primary_industry');
        $account->account_revenue = $request->input('account_revenue');
        $account->account_employees = $request->input('account_employees');
        $account->account_ownership = $request->input('account_ownership');
        $account->account_businessmodel = $request->input('account_businessmodel');
        $account->account_address2 = $request->input('account_address2');
        $account->account_county = $request->input('account_county');
        $account->account_tech_searched = $request->input('account_tech_searched');
        $account->account_tech_matched = $request->input('account_tech_matched');
        $account->account_technologies = $request->input('account_technologies');
        $account->account_advertising =$request->input('account_advertising');
        $account->account_agencyofrecord = $request->input('account_agencyofrecord');
        $account->account_audit = $request->input('account_audit');
        $account->account_bi_bigdata=$request->input('account_bi_bigdata');
        $account->account_collaboration = $request->input('account_collaboration');
        $account->account_crm = $request->input('account_crm');
        $account->account_datamanagement = $request->input('account_datamanagement');
        $account->account_datastorage = $request->input('account_datastorage');
        $account->account_ecommerce = $request->input('account_ecommerce');
        $account->account_enterpriseapps = $request->input('account_enterpriseapps');
        $account->account_erp = $request->input('account_erp');
        $account->account_finance = $request->input('account_finance');
        $account->account_itinfra = $request->input('account_itinfra');
        $account->account_hr = $request->input('account_hr');
        $account->account_itsm = $request->input('account_itsm');
        $account->account_languages = $request->input('account_languages');
        $account->account_medical = $request->input('account_medical');
        $account->account_mobility = $request->input('account_mobility');
        $account->account_networking = $request->input('account_networking');
        $account->account_programmingtools = $request->input('account_programmingtools');
        $account->account_security = $request->input('account_security');
        $account->account_servers = $request->input('account_servers');
        $account->account_serviceproviders = $request->input('account_serviceproviders');
        $account->account_telecommunications = $request->input('account_telecommunications');
        $account->account_virtualization = $request->input('account_virtualization');
        $account->account_record_type = $request->input('account_record_type');
        $account->account_responsible = $request->input('account_responsible');
        $account->save();
        return response()->json($account, 201);

        
     }

     public function destroy($id)

     {
         $account = Account::find($id);
         $account->delete();
         return response()->json('account removed successfully');
     }


}

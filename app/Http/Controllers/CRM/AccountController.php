<?php

namespace App\Http\Controllers\CRM;
use App\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
      return response()->json($accounts);
    }


     public function create(Request $request)

     { 
        $account = new Account;
        $account->account_name = $request->account_name;
        $account->account_email = $request->account_email;
        $account->account_mobileNo = $request->account_mobileNo;
        $account->account_landlineNo = $request->account_landlineNo;
        $account->account_address = $request->account_address;
        $account->account_website = $request->account_website;
        $account->account_city = $request->account_city;
        $account->account_state = $request->account_state;
        $account->account_country = $request->account_country;
        $account->account_pincode = $request->account_pincode;
        $account->account_panNo = $request->account_panNo;
        $account->account_GSTNo = $request->account_GSTNo;
        $account->save();
        return response()->json($account);

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
        $account->account_website = $request->input('account_website ');
        $account->account_city = $request->input('account_city');
        $account->account_state = $request->input('account_state');
        $account->account_country = $request->input('account_country');
        $account->account_pincode = $request->input('account_pincode');
        $account->account_panNo = $request->input('account_panNo');
        $account->account_GSTNo = $request->input('account_GSTNo');
        $account->save();
        return response()->json($account);

        
     }

     public function destroy($id)

     {
         $account = Account::find($id);
         $account->delete();
         return response()->json('account removed successfully');
     }


}

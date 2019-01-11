<?php

namespace App\Http\Controllers\CRM;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ContactResources;


class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()

    {
     
      $contacts = Contact::all();
      // return response()->json($contacts);
      return ContactResources::collection(Contact::paginate('100'));

    }


     public function store(Request $request)

     {  

        // $contact = Contact::create($request->all());
        // return response()->json($contact, 201);

        $contact = new Contact;
        $contact->contact_type=$request['contact_type'];
        $contact->contact_name=$request['contact_name'];
        $contact->contact_email=$request['contact_email'];
        $contact->contact_mobileNo=$request['contact_mobileNo'];
        $contact->contact_landlineNo=$request['contact_landlineNo'];
        $contact->contact_companyID=$request['contact_companyID'];
        $contact->contact_companyName=$request['contact_companyName'];
        $contact->contact_designation=$request['contact_designation'];
        $contact->save();
        return response()->json($contact);
 
     }
     
     public function show($id)

     {
         $contact = Contact::find($id);
         return response()->json($contact);
     }


     public function update(Request $request, $id)

     {  
        $contact= Contact::find($id);
        $contact->contact_type = $request->input('contact_type');
        $contact->contact_name = $request->input('contact_name');
        $contact->contact_email = $request->input('contact_email');
        $contact->contact_mobileNo  = $request->input('contact_mobileNo ');
        $contact->contact_landlineNo = $request->input('contact_landlineNo');
        $contact->contact_companyID = $request->input('contact_companyID');
        $contact->contact_companyName = $request->input('contact_companyName');
        $contact->contact_designation = $request->input('contact_designation');
        $contact->save();
        return response()->json($contact);
       
     }

     public function destroy($id)

     {
       
         $contact = Contact::find($id);
         $contact->delete();
         return response()->json('contact removed successfully');
     }
     
    }

<?php

use App\Contact;

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts = new Contact;
        $contacts->contact_type='customer';
        $contacts->contact_name='Rohan Nagi';
        $contacts->contact_mobileNo='1234567890';
        $contacts->contact_landlineNo='1234567890';
        $contacts->contact_email='rohannagi@gmail.com';
        $contact->contact_account_id='1';
        $contacts->contact_companyName = 'The Higher Pitch';
        $contacts->contact_designation='Data Analyst';
        $contacts->save();


        $contacts = new Contact;
        $contacts->contact_type='vendor';
        $contacts->contact_name='Vivek Tomar';
        $contacts->contact_mobileNo='1234567890';
        $contacts->contact_landlineNo='1234567890';
        $contacts->contact_email='vivek@gmail.com';
        $contact->contact_account_id='1';
        $contacts->contact_companyName = 'The Higher Pitch';
        $contacts->contact_designation = 'Marketing Head';
        $contacts->save();

        $contacts = new Contact;
        $contacts->contact_type='prospect';
        $contacts->contact_name='Vikram pratap Singh';
        $contacts->contact_mobileNo='1234567890';
        $contacts->contact_landlineNo='1234567890';
        $contacts->contact_email='vikramforvk@gmail.com';
        $contact->contact_account_id='2';
        $contacts->contact_companyName = 'forethought';
        $contacts->contact_designation = 'Senior Developer';
        $contacts->save();

        $contacts = new Contact;
        $contacts->contact_type='invester';
        $contacts->contact_name='Vibhav Kanaujjiya';
        $contacts->contact_mobileNo='1234567890';
        $contacts->contact_landlineNo='1234567890';
        $contacts->contact_email='vibhav@gmail.compact(varname)';
        $contact->contact_account_id='2';
        $contacts->contact_companyName = 'forethought';
        $contacts->contact_designation ='senior Developer';
        $contacts->save();

        // $contacts = new Contact;
        // $contacts->contact_type='invester';
        // $contacts->contact_name='Vibhav Kanaujjiya';
        // $contacts->contact_mobileNo='1234567890';
        // $contacts->contact_landlineNo='1234567890';
        // $contacts->contact_email='vibhav@gmail.compact(varname)';
        // $contact->contact_account_id='2';
        // $contacts->contact_companyName = 'forethought';
        // $contacts->contact_designation ='senior Developer';
        // $contacts->save();


        // $contacts = new Contact;
        // $contacts->contact_type='invester';
        // $contacts->contact_name='Vibhav Kanaujjiya';
        // $contacts->contact_mobileNo='1234567890';
        // $contacts->contact_landlineNo='1234567890';
        // $contacts->contact_email='vibhav@gmail.compact(varname)';
        // $contact->contact_account_id='2';
        // $contacts->contact_companyName = 'forethought';
        // $contacts->contact_designation ='senior Developer';
        // $contacts->save();

        // $contacts = new Contact;
        // $contacts->contact_type='invester';
        // $contacts->contact_name='Vibhav Kanaujjiya';
        // $contacts->contact_mobileNo='1234567890';
        // $contacts->contact_landlineNo='1234567890';
        // $contacts->contact_email='vibhav@gmail.compact(varname)';
        // $contact->contact_account_id='2';
        // $contacts->contact_companyName = 'forethought';
        // $contacts->contact_designation ='senior Developer';
        // $contacts->save();



        // $contacts = new Contact;
        // $contacts->contact_type='invester';
        // $contacts->contact_name='Vibhav Kanaujjiya';
        // $contacts->contact_mobileNo='1234567890';
        // $contacts->contact_landlineNo='1234567890';
        // $contacts->contact_email='vibhav@gmail.compact(varname)';
        // $contact->contact_account_id='2';
        // $contacts->contact_companyName = 'forethought';
        // $contacts->contact_designation ='senior Developer';
        // $contacts->save();



        // $contacts = new Contact;
        // $contacts->contact_type='invester';
        // $contacts->contact_name='Vibhav Kanaujjiya';
        // $contacts->contact_mobileNo='1234567890';
        // $contacts->contact_landlineNo='1234567890';
        // $contacts->contact_email='vibhav@gmail.compact(varname)';
        // $contact->contact_account_id='2';
        // $contacts->contact_companyName = 'forethought';
        // $contacts->contact_designation ='senior Developer';
        // $contacts->save();



        // $contacts = new Contact;
        // $contacts->contact_type='invester';
        // $contacts->contact_name='Vibhav Kanaujjiya';
        // $contacts->contact_mobileNo='1234567890';
        // $contacts->contact_landlineNo='1234567890';
        // $contacts->contact_email='vibhav@gmail.compact(varname)';
        // $contact->contact_account_id='2';
        // $contacts->contact_companyName = 'forethought';
        // $contacts->contact_designation ='senior Developer';
        // $contacts->save();
        

        // $contacts = new Contact;
        // $contacts->contact_type='invester';
        // $contacts->contact_name='Vibhav Kanaujjiya';
        // $contacts->contact_mobileNo='1234567890';
        // $contacts->contact_landlineNo='1234567890';
        // $contacts->contact_email='vibhav@gmail.compact(varname)';
        // $contact->contact_account_id='2';
        // $contacts->contact_companyName = 'forethought';
        // $contacts->contact_designation ='senior Developer';
        // $contacts->save();

    }
}

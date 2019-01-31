<?php
use App\Lead;

use Illuminate\Database\Seeder;

class LeadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $leads = new Lead;
       $leads->lead_service_code='001';
       $leads->lead_name='Vikram pratap Singh';
       $leads->lead_designation='senior Developer';
       $leads->lead_companyName='Forethought';
       $leads->lead_email='vikramforvk@gmail.com';
       $leads->lead_mobileNo='9718040890';      
       $leads->lead_landlineNo='0356634526';
       $leads->lead_address='Noida';   
       $leads->lead_city='Noida';      
       $leads->lead_state='Uttar Pradesh';     
       $leads->lead_country='India';   
       $leads->lead_pincode='201301';   
       $leads->lead_utm_website_url='www.utmurl.com';
       $leads->lead_utm_campaign_source='Forethought';
       $leads->lead_utm_campaign_medium='Himanshu Mishra';
       $leads->lead_utm_campaign_name='GrooveNexus';
       $leads->lead_utm_campaign_term='utm_campaign term';
       $leads->lead_utm_campaign_content='campaign-contant';
       $leads->lead_activity='activity is good';  
       $leads->lead_Status='in progress';    
       $leads->lead_Status_Inormation='50%';
       $leads->lead_Source='Himanshu Mishra';    
       $leads->lead_Source_Inormation='Forethought';
       $leads->lead_Created_By_Code='1234';
       $leads->lead_Amount_Currrency='1 million';
       $leads->lead_total='5';
       $leads->lead_Currency='Ruppes';
       $leads->lead_Location ='Noida'; 
       $leads->save();

       $leads = new Lead;
       $leads->lead_service_code='002';
       $leads->lead_name='Digwijay Dubey';  
       $leads->lead_designation='server administraiter';
       $leads->lead_companyName='Forethought';
       $leads->lead_email='Diggy@gmail.com';
       $leads->lead_mobileNo='7889767889';      
       $leads->lead_landlineNo='0355565456';
       $leads->lead_address='Noida';   
       $leads->lead_city='Noida';      
       $leads->lead_state='Uttar Pradesh';     
       $leads->lead_country='India';   
       $leads->lead_pincode='203201';   
       $leads->lead_utm_website_url='www.utmurl.com';
       $leads->lead_utm_campaign_source='The Higher Pitch';
       $leads->lead_utm_campaign_medium='Nishant Mishra';
       $leads->lead_utm_campaign_name='engifest';
       $leads->lead_utm_campaign_term='utm_campaign_term';
       $leads->lead_utm_campaign_content='utm_campaign_content';
       $leads->lead_activity='activity is good';  
       $leads->lead_Status='completed';    
       $leads->lead_Status_Inormation='status is good';
       $leads->lead_Source='Forethought';    
       $leads->lead_Source_Inormation='himanshu Mishra';
       $leads->lead_Created_By_Code='234556';
       $leads->lead_Amount_Currrency='2 lacks';
       $leads->lead_total='3';
       $leads->lead_Currency='Ruppees';
       $leads->lead_Location ='Noida'; 
       $leads->save();

      $leads = new Lead;
       $leads->lead_service_code='';
       $leads->lead_name='Vibhav Kannaujiya';
       $leads->lead_designation='senior wordpress Developer';
       $leads->lead_companyName='Forethought';
       $leads->lead_email='vibhav@gmail.com';
       $leads->lead_mobileNo='8978786756';      
       $leads->lead_landlineNo='0356634567';
       $leads->lead_address='Noida';   
       $leads->lead_city='Noida';      
       $leads->lead_state='Uttar Pradesh';     
       $leads->lead_country='India';   
       $leads->lead_pincode='200211';   
       $leads->lead_utm_website_url='www.utmurl.com';
       $leads->lead_utm_campaign_source='Forethought';
       $leads->lead_utm_campaign_medium='Himanshu Mishra';
       $leads->lead_utm_campaign_name='campaign_name';
       $leads->lead_utm_campaign_term='campaign_trrm';
       $leads->lead_utm_campaign_content='utm_campaign_content';
       $leads->lead_activity='very good';  
       $leads->lead_Status='in progress';    
       $leads->lead_Status_Inormation='lead status is good';
       $leads->lead_Source='Forethought';    
       $leads->lead_Source_Inormation='Himanshu Mishra';
       $leads->lead_Created_By_Code='2378847';
       $leads->lead_Amount_Currrency='5 Lackhs';
       $leads->lead_total='5';
       $leads->lead_Currency='Ruppees';
       $leads->lead_Location ='Noida'; 
       $leads->save();

       $leads = new Lead;
       $leads->lead_service_code='';
       $leads->lead_name='Rohan Nagi';
       $leads->lead_designation='Marketing Head';
       $leads->lead_companyName='The Higher Pitch';
       $leads->lead_email='rohan@gmail.com';
       $leads->lead_mobileNo='9089786756';      
       $leads->lead_landlineNo='045345789';
       $leads->lead_address='the Higher pitch logix technova sector-132 tower B Noida';   
       $leads->lead_city='Noida';      
       $leads->lead_state='Uttar Pradesh';     
       $leads->lead_country='India';   
       $leads->lead_pincode='211301';   
       $leads->lead_utm_website_url='';
       $leads->lead_utm_campaign_source='';
       $leads->lead_utm_campaign_medium='';
       $leads->lead_utm_campaign_name='';
       $leads->lead_utm_campaign_term='';
       $leads->lead_utm_campaign_content='';
       $leads->lead_activity='';  
       $leads->lead_Status='';    
       $leads->lead_Status_Inormation='';
       $leads->lead_Source='';    
       $leads->lead_Source_Inormation='';
       $leads->lead_Created_By_Code='';
       $leads->lead_Amount_Currrency='';
       $leads->lead_total='';
       $leads->lead_Currency='';
       $leads->lead_Location ='Noida'; 
       $leads->save();

       $leads = new Lead;
       $leads->lead_service_code='';
       $leads->lead_name='Vivek Tomar';
       $leads->lead_designation='HR';
       $leads->lead_companyName='The Higher Pitch';
       $leads->lead_email='vivek@gmail.com';
       $leads->lead_mobileNo='8967453423';      
       $leads->lead_landlineNo='0234567898';
       $leads->lead_address='the Higher pitch logix technova sector-132 tower B Noida';   
       $leads->lead_city='Noida';      
       $leads->lead_state='Uttar Pradesh';     
       $leads->lead_country='India';   
       $leads->lead_pincode='211301';   
       $leads->lead_utm_website_url='';
       $leads->lead_utm_campaign_source='';
       $leads->lead_utm_campaign_medium='';
       $leads->lead_utm_campaign_name='';
       $leads->lead_utm_campaign_term='';
       $leads->lead_utm_campaign_content='';
       $leads->lead_activity='';  
       $leads->lead_Status='';    
       $leads->lead_Status_Inormation='';
       $leads->lead_Source='';    
       $leads->lead_Source_Inormation='';
       $leads->lead_Created_By_Code='';
       $leads->lead_Amount_Currrency='';
       $leads->lead_total='';
       $leads->lead_Currency='';
       $leads->lead_Location ='Noida'; 
       $leads->save();

       $leads = new Lead;
       $leads->lead_service_code='';
       $leads->lead_name='Aparupa Datta';
       $leads->lead_designation='Designer';
       $leads->lead_companyName='The Higher Pitch';
       $leads->lead_email='aparupa@gmail.com';
       $leads->lead_mobileNo='8976456790';      
       $leads->lead_landlineNo='06789435677';
       $leads->lead_address='the Higher pitch logix technova sector-132 tower B Noida';   
       $leads->lead_city='Noida';      
       $leads->lead_state='Uttar Pradesh';     
       $leads->lead_country='India';   
       $leads->lead_pincode='211007';   
       $leads->lead_utm_website_url='';
       $leads->lead_utm_campaign_source='';
       $leads->lead_utm_campaign_medium='';
       $leads->lead_utm_campaign_name='';
       $leads->lead_utm_campaign_term='';
       $leads->lead_utm_campaign_content='';
       $leads->lead_activity='';  
       $leads->lead_Status='';    
       $leads->lead_Status_Inormation='';
       $leads->lead_Source='';    
       $leads->lead_Source_Inormation='';
       $leads->lead_Created_By_Code='';
       $leads->lead_Amount_Currrency='';
       $leads->lead_total='';
       $leads->lead_Currency='';
       $leads->lead_Location ='Noida'; 
       $leads->save();

       $leads = new Lead;
       $leads->lead_service_code='00';
       $leads->lead_name='Amit Kumar Singh';
       $leads->lead_designation='Senior front end Developer';
       $leads->lead_companyName='Forethought';
       $leads->lead_email='amit@gmail.com';
       $leads->lead_mobileNo='8967453456';      
       $leads->lead_landlineNo='08965545355';
       $leads->lead_address='Forethought logix technova sector-132 tower B Noida B-308';   
       $leads->lead_city='Noida';      
       $leads->lead_state='Uttar Pradesh';     
       $leads->lead_country='India';   
       $leads->lead_pincode='211007';   
       $leads->lead_utm_website_url='';
       $leads->lead_utm_campaign_source='';
       $leads->lead_utm_campaign_medium='';
       $leads->lead_utm_campaign_name='';
       $leads->lead_utm_campaign_term='';
       $leads->lead_utm_campaign_content='';
       $leads->lead_activity='';  
       $leads->lead_Status='';    
       $leads->lead_Status_Inormation='';
       $leads->lead_Source='';    
       $leads->lead_Source_Inormation='';
       $leads->lead_Created_By_Code='';
       $leads->lead_Amount_Currrency='';
       $leads->lead_total='';
       $leads->lead_Currency='';
       $leads->lead_Location ='Noida'; 
       $leads->save();

       $leads = new Lead;
       $leads->lead_service_code='';
       $leads->lead_name='Jai Prakash Mehta';
       $leads->lead_designation='senior Back-end Developer';
       $leads->lead_companyName='Forethought';
       $leads->lead_email='jp@gmail.com';
       $leads->lead_mobileNo='9878893412';      
       $leads->lead_landlineNo='03566267897';
       $leads->lead_address='Forethought logix technova sector-132 tower B Noida B-308';   
       $leads->lead_city='Noida';      
       $leads->lead_state='Uttar Pradesh';     
       $leads->lead_country='India';   
       $leads->lead_pincode='211600';   
       $leads->lead_utm_website_url='';
       $leads->lead_utm_campaign_source='';
       $leads->lead_utm_campaign_medium='';
       $leads->lead_utm_campaign_name='';
       $leads->lead_utm_campaign_term='';
       $leads->lead_utm_campaign_content='';
       $leads->lead_activity='';  
       $leads->lead_Status='';    
       $leads->lead_Status_Inormation='';
       $leads->lead_Source='';    
       $leads->lead_Source_Inormation='';
       $leads->lead_Created_By_Code='';
       $leads->lead_Amount_Currrency='';
       $leads->lead_total='';
       $leads->lead_Currency='';
       $leads->lead_Location ='Noida'; 
       $leads->save();

      $leads = new Lead;
       $leads->lead_service_code='';
       $leads->lead_name='Pankhuri Prakash';
       $leads->lead_designation='Search Engine optimization';
       $leads->lead_companyName='Forethought';
       $leads->lead_email='pankhuri@gmail.com';
       $leads->lead_mobileNo='8978562345';      
       $leads->lead_landlineNo='0786743576';
       $leads->lead_address='Forethought logix technova sector-132 tower B Noida B-308';   
       $leads->lead_city='Noida';      
       $leads->lead_state='Uttar Pradesh';     
       $leads->lead_country='India';   
       $leads->lead_pincode='211001';   
       $leads->lead_utm_website_url='';
       $leads->lead_utm_campaign_source='';
       $leads->lead_utm_campaign_medium='';
       $leads->lead_utm_campaign_name='';
       $leads->lead_utm_campaign_term='';
       $leads->lead_utm_campaign_content='';
       $leads->lead_activity='';  
       $leads->lead_Status='';    
       $leads->lead_Status_Inormation='';
       $leads->lead_Source='';    
       $leads->lead_Source_Inormation='';
       $leads->lead_Created_By_Code='';
       $leads->lead_Amount_Currrency='';
       $leads->lead_total='';
       $leads->lead_Currency='';
       $leads->lead_Location ='Noida'; 
       $leads->save();

       // $leads = new Lead;
       // $leads->lead_service_code='';
       // $leads->lead_name='';
       // $leads->lead_designation='';
       // $leads->lead_companyName='';
       // $leads->lead_email='';
       // $leads->lead_mobileNo='';      
       // $leads->lead_landlineNo='';
       // $leads->lead_address='';   
       // $leads->lead_city='';      
       // $leads->lead_state='';     
       // $leads->lead_country='';   
       // $leads->lead_pincode='';   
       // $leads->lead_utm_website_url='';
       // $leads->lead_utm_campaign_source='';
       // $leads->lead_utm_campaign_medium='';
       // $leads->lead_utm_campaign_name='';
       // $leads->lead_utm_campaign_term='';
       // $leads->lead_utm_campaign_content='';
       // $leads->lead_activity='';  
       // $leads->lead_Status='';    
       // $leads->lead_Status_Inormation='';
       // $leads->lead_Source='';    
       // $leads->lead_Source_Inormation='';
       // $leads->lead_Created_By_Code='';
       // $leads->lead_Amount_Currrency='';
       // $leads->lead_total='';
       // $leads->lead_Currency='';
       // $leads->lead_Location =''; 
       // $leads->save();

      // $leads = new Lead;
      //  $leads->lead_service_code='';
      //  $leads->lead_name='';
      //  $leads->lead_designation='';
      //  $leads->lead_companyName='';
      //  $leads->lead_email='';
      //  $leads->lead_mobileNo='';      
      //  $leads->lead_landlineNo='';
      //  $leads->lead_address='';   
      //  $leads->lead_city='';      
      //  $leads->lead_state='';     
      //  $leads->lead_country='';   
      //  $leads->lead_pincode='';   
      //  $leads->lead_utm_website_url='';
      //  $leads->lead_utm_campaign_source='';
      //  $leads->lead_utm_campaign_medium='';
      //  $leads->lead_utm_campaign_name='';
      //  $leads->lead_utm_campaign_term='';
      //  $leads->lead_utm_campaign_content='';
      //  $leads->lead_activity='';  
      //  $leads->lead_Status='';    
      //  $leads->lead_Status_Inormation='';
      //  $leads->lead_Source='';    
      //  $leads->lead_Source_Inormation='';
      //  $leads->lead_Created_By_Code='';
      //  $leads->lead_Amount_Currrency='';
      //  $leads->lead_total='';
      //  $leads->lead_Currency='';
      //  $leads->lead_Location =''; 
      //  $leads->save();

       // $leads = new Lead;
       // $leads->lead_service_code='';
       // $leads->lead_name='';
       // $leads->lead_designation='';
       // $leads->lead_companyName='';
       // $leads->lead_email='';
       // $leads->lead_mobileNo='';      
       // $leads->lead_landlineNo='';
       // $leads->lead_address='';   
       // $leads->lead_city='';      
       // $leads->lead_state='';     
       // $leads->lead_country='';   
       // $leads->lead_pincode='';   
       // $leads->lead_utm_website_url='';
       // $leads->lead_utm_campaign_source='';
       // $leads->lead_utm_campaign_medium='';
       // $leads->lead_utm_campaign_name='';
       // $leads->lead_utm_campaign_term='';
       // $leads->lead_utm_campaign_content='';
       // $leads->lead_activity='';  
       // $leads->lead_Status='';    
       // $leads->lead_Status_Inormation='';
       // $leads->lead_Source='';    
       // $leads->lead_Source_Inormation='';
       // $leads->lead_Created_By_Code='';
       // $leads->lead_Amount_Currrency='';
       // $leads->lead_total='';
       // $leads->lead_Currency='';
       // $leads->lead_Location =''; 
       // $leads->save();


    }
}

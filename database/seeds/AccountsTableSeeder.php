<?php

use App\Account;
use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        
       $accounts = new Account;
       $accounts->account_name= 'The Higher pitch';
       $accounts->account_website= 'www.thehigherpitch.com';
       $accounts->account_email = 'higherpitch@gmail.com';
       $accounts->account_mobileNo= '9839562378';
       $accounts->account_landlineNo='03566264942';
       $accounts->account_address='B 303 logix technova sector-132 tower B';
       $accounts->account_city='Noida';
       $accounts->account_state='U.P.';
       $accounts->account_country='India';
       $accounts->account_pincode='201301';
       $accounts->account_panNo='ASDF4567';
       $accounts->account_GSTNo='GSITTHP896567';
       $accounts->save();
       

       $accounts = new Account;
       $accounts->account_name= 'Forethought';
       $accounts->account_website= 'www.forethought.in';
       $accounts->account_email = 'forethought@gmail.com';
       $accounts->account_mobileNo= '(818) 863-8900';  
       $accounts->account_landlineNo='34567576577';
       $accounts->account_address='B 308 logix technova sector-132 tower B';
       $accounts->account_city='Noida';
       $accounts->account_state='Uttar Pradesh';
       $accounts->account_country='India';
       $accounts->account_pincode='201301';
       $accounts->account_panNo='QWER34567';
       $accounts->account_GSTNo='GSTINF9756543';     
       $accounts->save(); 


       $accounts = new Account;
       $accounts->account_name= '3Play Media';
       $accounts->account_website= 'www.3playmedia.com';
       $accounts->account_email = 'playmedia@gmail.com';
       $accounts->account_mobileNo= '(617) 764-5189';  
       $accounts->account_landlineNo='0987545657';
       $accounts->account_address='34 Farnsworth Street';
       $accounts->account_city='Boston';
       $accounts->account_state='MA';
       $accounts->account_country='United States';
       $accounts->account_pincode='2210';
       $accounts->account_panNo='QWER56777';
       $accounts->account_GSTNo='HJKL45567';     
       $accounts->save(); 


       $accounts = new Account;
       $accounts->account_name= '522 Productions, LLC';
       $accounts->account_website= 'www.522productions.com';
       $accounts->account_email = '522production@gmail.com';
       $accounts->account_mobileNo= '03256789'; 
       $accounts->account_landlineNo='(703) 286-7696';
       $accounts->account_address='711 King St';
       $accounts->account_city='Alexandria';
       $accounts->account_state='VA';
       $accounts->account_country='United States';
       $accounts->account_pincode='22314';
       $accounts->account_panNo='XCVB4567';
       $accounts->account_GSTNo='ASGH6789';      
       $accounts->save(); 

       $accounts = new Account;
       $accounts->account_name= '9 Story Media Group';
       $accounts->account_website= 'www.9story.com';
       $accounts->account_email = '9story@gmail.com';
       $accounts->account_mobileNo= ' (416) 530-9900';   
       $accounts->account_landlineNo='08967432590';
       $accounts->account_address='23 Fraser Avenue';
       $accounts->account_city='Toronto';
       $accounts->account_state='ON';
       $accounts->account_country='Canada';
       $accounts->account_pincode='M6K 1Y7';
       $accounts->account_panNo='QWER34567';
       $accounts->account_GSTNo='JKLH8765';    
       $accounts->save(); 

       $accounts = new Account;
       $accounts->account_name= 'A+E Networks';
       $accounts->account_website= 'www.aenetworks.com';
       $accounts->account_email = 'aene@gmail.com';
       $accounts->account_mobileNo= '(212) 210-1400'; 
       $accounts->account_landlineNo='0987895734';
       $accounts->account_address='235 E 45th Street';
       $accounts->account_city='New York';
       $accounts->account_state='NY';
       $accounts->account_country='United States';
       $accounts->account_pincode='10017';
       $accounts->account_panNo='ZVGY567856';
       $accounts->account_GSTNo='UIOP0786';      
       $accounts->save(); 

       $accounts = new Account;
       $accounts->account_name= 'A52';
       $accounts->account_website= 'www.a52.com';
       $accounts->account_email = 'A52@gmail.com';
       $accounts->account_mobileNo= '(310) 586-0650';
       $accounts->account_landlineNo='90654336';
       $accounts->account_address='2308 Broadway';
       $accounts->account_city='Santa Monica';
       $accounts->account_state='CA';
       $accounts->account_country='United States';
       $accounts->account_pincode='90404';
       $accounts->account_panNo='LKHJU876545';
       $accounts->account_GSTNo='GHJKI7656788';       
       $accounts->save(); 

       $accounts = new Account;
       $accounts->account_name= 'ABC Television';
       $accounts->account_website= 'www.abc.go.com';
       $accounts->account_email = 'ABC@gmail.com';
       $accounts->account_mobileNo= '(818) 560-1000'; 
       $accounts->account_landlineNo='90765543678';
       $accounts->account_address='500 S Buena Vista Street';
       $accounts->account_city='Burbank';
       $accounts->account_state='CA';
       $accounts->account_country='United States';
       $accounts->account_pincode='91521';
       $accounts->account_panNo='HJKLI78678';
       $accounts->account_GSTNo='IOPTH56788';      
       $accounts->save(); 

       $accounts = new Account;
       $accounts->account_name= 'Aboriginal Peoples Television Network';
       $accounts->account_website= 'www.aptn.ca';
       $accounts->account_email = 'aboriginal@gmail.com';
       $accounts->account_mobileNo= '(204) 947-9331'; 
       $accounts->account_landlineNo='0945886567';
       $accounts->account_address='500 S Buena Vista ';
       $accounts->account_city='Winnipeg';
       $accounts->account_state='MB';
       $accounts->account_country='Canada';
       $accounts->account_pincode='R3B 2C3';
       $accounts->account_panNo='KLOIYU7656';
       $accounts->account_GSTNo='YUJV89654';      
       $accounts->save(); 

       $accounts = new Account;
       $accounts->account_name= 'Above Average';
       $accounts->account_website= 'www.aboveaverage.com';
       $accounts->account_email = 'Above@gmail.com';
       $accounts->account_mobileNo= '(814) 237-0309';  
       $accounts->account_landlineNo='0998754678';
       $accounts->account_address='25 W 45th Street';
       $accounts->account_city='New York';
       $accounts->account_state='NY';
       $accounts->account_country='United States';
       $accounts->account_pincode='10036';
       $accounts->account_panNo='HJKLL456567';
       $accounts->account_GSTNo='JKLLOOI787778';    
       $accounts->save(); 

       $accounts = new Account;
       $accounts->account_name= 'Advanced Digital Services';
       $accounts->account_website= 'www.adshollywood.com';
       $accounts->account_email = 'advance@gmail.com';
       $accounts->account_mobileNo= ' (323) 468-2200';    
       $accounts->account_landlineNo='0987656788';
       $accounts->account_address='948 N Cahuenga Boulevard';
       $accounts->account_city='Los Angeles';
       $accounts->account_state='CA';
       $accounts->account_country='United States';
       $accounts->account_pincode='90038';
       $accounts->account_panNo='ASDFGH789987';
       $accounts->account_GSTNo='KIHYHY78895';   
       $accounts->save(); 


       $accounts = new Account;
       $accounts->account_name= 'Al Jazeera International';
       $accounts->account_website= 'www.aljazeera.net';
       $accounts->account_email = 'jazeera@gmail.com';
       $accounts->account_mobileNo= '+974 44417584';
       $accounts->account_landlineNo='098766866777';
       $accounts->account_address='Al Waab Road';
       $accounts->account_city='Al Waab';
       $accounts->account_state='Doha';
       $accounts->account_country='Qatar';
       $accounts->account_pincode='4011';
       $accounts->account_panNo='GHJK789546';
       $accounts->account_GSTNo='GHJKK6789';       
       $accounts->save(); 

       $accounts = new Account;
       $accounts->account_name= 'Alaska Public Media';
       $accounts->account_website= 'www.alaskapublic.org';
       $accounts->account_email = 'alaska@gmail.com';
       $accounts->account_mobileNo= '(223) 2345567';
       $accounts->account_landlineNo='0987775444';
       $accounts->account_address='MA virginia';
       $accounts->account_city='Anchorage';
       $accounts->account_state='AK';
       $accounts->account_country='United States';
       $accounts->account_pincode='99508';
       $accounts->account_panNo='FGJK7899';
       $accounts->account_GSTNo='HJKLKL678899';       
       $accounts->save(); 

      
   }

}

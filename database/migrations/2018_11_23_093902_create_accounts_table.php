<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_name')->nullable($value = true);
            $table->string('account_website')->nullable($value = true);
            $table->string('account_email')->nullable($value = true); 
            $table->string('account_mobileNo')->nullable($value = true); 
            $table->string('account_landlineNo')->nullable($value = true);
            $table->string('account_address')->nullable($value = true); 
            $table->string('account_city')->nullable($value = true); 
            $table->string('account_state')->nullable($value = true); 
            $table->string('account_country')->nullable($value = true); 
            $table->string('account_pincode')->nullable($value = true); 
            $table->string('account_panNo')->nullable($value = true); 
            $table->string('account_GSTNo')->nullable($value = true);

            $table->string('account_platform_refid')->nullable($value = true);
            $table->string('account_primary_industry')->nullable($value = true); 
            $table->string('account_revenue')->nullable($value = true); 
            $table->string('account_employees')->nullable($value = true);
            $table->string('account_ownership')->nullable($value = true); 
            $table->string('account_businessmodel')->nullable($value = true); 
            $table->string('account_address2')->nullable($value = true); 
            $table->string('account_country')->nullable($value = true); 
            $table->string('account_county')->nullable($value = true); 
            $table->string('account_tech_searched')->nullable($value = true); 
            $table->string('account_tech_matched')->nullable($value = true);
            $table->string('account_technologies')->nullable($value = true);
            $table->string('account_advertising')->nullable($value = true); 
            $table->string('account_agencyofrecord')->nullable($value = true); 
            $table->string('account_audit')->nullable($value = true);
            $table->string('account_bi_bigdata')->nullable($value = true); 
            $table->string('account_collaboration')->nullable($value = true); 
            $table->string('account_crm')->nullable($value = true); 
            $table->string('account_datamanagement')->nullable($value = true); 
            $table->string('account_datastorage')->nullable($value = true); 
            $table->string('account_ecommerce')->nullable($value = true); 
            $table->string('account_enterpriseapps')->nullable($value = true);
            $table->string('account_erp')->nullable($value = true);
            $table->string('account_finance')->nullable($value = true); 
            $table->string('account_itinfra')->nullable($value = true); 
            $table->string('account_account_hr')->nullable($value = true);
            $table->string('account_account_itsm')->nullable($value = true); 
            $table->string('account_languages')->nullable($value = true); 
            $table->string('account_account_medical')->nullable($value = true); 
            $table->string('account_account_mobility')->nullable($value = true); 
            $table->string('account_networking')->nullable($value = true); 
            $table->string('account_programmingtools')->nullable($value = true); 
            $table->string('account_tech_matched')->nullable($value = true);
            $table->string('account_security')->nullable($value = true);
            $table->string('account_servers')->nullable($value = true); 
            $table->string('account_serviceproviders')->nullable($value = true); 
            $table->string('account_telecommunications')->nullable($value = true);
            $table->string('account_virtualization')->nullable($value = true); 
            $table->string('account_record_type')->nullable($value = true); 
            $table->string('account_responsible')->nullable($value = true); 
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}

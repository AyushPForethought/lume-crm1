<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('lead_id');
            $table->string('lead_service_code');
            $table->string('lead_name');
            $table->string('lead_designation');
            $table->string('lead_companyName');
            $table->string('lead_email');
            $table->string('lead_mobileNo');
            $table->string('lead_landlineNo');
            $table->string('lead_address');
            $table->string('lead_city');
            $table->string('lead_state');
            $table->string('lead_country');
            $table->string('lead_pincode');
            $table->string('lead_companyID');
            $table->string('lead_accountID');
            $table->string('lead_contactID');
            $table->string('lead_utm_website_url');
            $table->string('lead_utm_campaign_source');
            $table->string('lead_utm_campaign_medium');
            $table->string('lead_utm_campaign_name');
            $table->string('lead_utm_campaign_term');
            $table->string('lead_utm_campaign_content');
            $table->string('lead_activity');
            $table->string('lead_Status');
            $table->string('lead_Status_Inormation');
            $table->string('lead_Source');
            $table->string('lead_Source_Inormation');
            $table->string('lead_Created_By_Code');
            $table->string('lead_Amount_Currrency');
            $table->string('lead_total');
            $table->string('lead_Currency');
            $table->string('lead_Location');
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
        Schema::dropIfExists('leads');
    }
}

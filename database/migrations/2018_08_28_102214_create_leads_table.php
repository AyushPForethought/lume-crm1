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
            $table->string('lead_service_code')->nullable($value = true);
            $table->string('lead_name')->nullable($value = true);
            $table->string('lead_designation'->nullable($value = true);
            $table->string('lead_companyName')->nullable($value = true);
            $table->string('lead_email')->nullable($value = true);
            $table->string('lead_mobileNo')->nullable($value = true);
            $table->string('lead_landlineNo')->nullable($value = true);
            $table->string('lead_address')->nullable($value = true);
            $table->string('lead_city')->nullable($value = true);
            $table->string('lead_state')->nullable($value = true);
            $table->string('lead_country')->nullable($value = true);
            $table->string('lead_pincode')->nullable($value = true);
            $table->string('lead_companyID')->nullable($value = true);
            $table->string('lead_accountID')->nullable($value = true);
            $table->string('lead_contactID')->nullable($value = true);
            $table->string('lead_utm_website_url')->nullable($value = true);
            $table->string('lead_utm_campaign_source')->nullable($value = true);
            $table->string('lead_utm_campaign_medium')->nullable($value = true);
            $table->string('lead_utm_campaign_name')->nullable($value = true);
            $table->string('lead_utm_campaign_term')->nullable($value = true);
            $table->string('lead_utm_campaign_content')->nullable($value = true);
            $table->string('lead_activity')->nullable($value = true);
            $table->string('lead_Status')->nullable($value = true);
            $table->string('lead_Status_Inormation')->nullable($value = true);
            $table->string('lead_Source')->nullable($value = true);
            $table->string('lead_Source_Inormation')->nullable($value = true);
            $table->string('lead_Created_By_Code')->nullable($value = true);
            $table->string('lead_Amount_Currrency')->nullable($value = true);
            $table->string('lead_total')->nullable($value = true);
            $table->string('lead_Currency')->nullable($value = true);
            $table->string('lead_Location')->nullable($value = true);
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

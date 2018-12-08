<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->increments('opportunity_id');
            $table->string('opportunity_deal_owner');
            $table->string('opportunity_deal_name');
            $table->string('opportunity_account_name');
            $table->string('opportunity_type');
            $table->string('opportunity_lead_id');
            $table->string('opportunity_campaign_id');
            $table->string('opportunity_contact_id');
            $table->string('opportunity_amount');
            $table->string('opportunity_closing_date');
            $table->string('opportunity_stage');
            $table->string('opportunity_probability');
            $table->string('opportunity_expected_revenue');
            $table->string('opportunity_description');
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
        Schema::dropIfExists('opportunity');
    }
}

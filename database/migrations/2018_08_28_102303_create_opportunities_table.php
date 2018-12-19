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
            $table->string('opportunity_deal_owner')->nullable($value = true);
            $table->string('opportunity_deal_name')->nullable($value = true);
            $table->string('opportunity_account_name')->nullable($value = true);
            $table->string('opportunity_type')->nullable($value = true);
            $table->string('opportunity_lead_id')->nullable($value = true);
            $table->string('opportunity_campaign_id')->nullable($value = true);
            $table->string('opportunity_contact_id')->nullable($value = true);
            $table->string('opportunity_amount')->nullable($value = true);
            $table->string('opportunity_closing_date')->nullable($value = true);
            $table->string('opportunity_stage')->nullable($value = true);
            $table->string('opportunity_probability')->nullable($value = true);
            $table->string('opportunity_expected_revenue')->nullable($value = true);
            $table->string('opportunity_description')->nullable($value = true);
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

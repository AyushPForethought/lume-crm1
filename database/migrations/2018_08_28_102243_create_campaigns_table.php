<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('campaign_id');
            $table->string('campaign_name');
            $table->string('campaign_type');
            $table->string('campaign_description');
            $table->string('campaign_startDate');
            $table->string('campaign_endDate');
            $table->string('campaign_budgetCost');
            $table->string('utm_website_url');
            $table->string('utm_campaign_source');
            $table->string('utm_Campaign_Medium');
            $table->string('utm_campaign_name');
            $table->string('utm_campaign_term');
            $table->string('utm_campaign_content');
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
        Schema::dropIfExists('campaigns');
    }
}

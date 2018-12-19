->nullable($value = true)<?php

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
            $table->string('campaign_name')->nullable($value = true);
            $table->string('campaign_type')->nullable($value = true);
            $table->string('campaign_description')->nullable($value = true);
            $table->string('campaign_startDate')->nullable($value = true);
            $table->string('campaign_endDate')->nullable($value = true);
            $table->string('campaign_budgetCost')->nullable($value = true);
            $table->string('utm_website_url')->nullable($value = true);
            $table->string('utm_campaign_source')->nullable($value = true);
            $table->string('utm_Campaign_Medium')->nullable($value = true);
            $table->string('utm_campaign_name')->nullable($value = true);
            $table->string('utm_campaign_term')->nullable($value = true);
            $table->string('utm_campaign_content')->nullable($value = true);
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

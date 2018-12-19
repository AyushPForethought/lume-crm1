<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('contact_id');
            $table->string('contact_type')->nullable($value = true);
            $table->string('contact_name')->nullable($value = true);
            $table->string('contact_email')->nullable($value = true);
            $table->string('contact_mobileNo')->nullable($value = true);
            $table->string('contact_landlineNo')->nullable($value = true);
            $table->string('contact_companyID')->nullable($value = true);
            $table->string('contact_companyName')->nullable($value = true);
            $table->string('contact_designation')->nullable($value = true);
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
        Schema::dropIfExists('contacts');
    }
}

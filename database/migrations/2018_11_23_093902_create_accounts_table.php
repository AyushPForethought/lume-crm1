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

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
            $table->string('account_name');
            $table->string('account_website');
            $table->string('account_email'); 
            $table->string('account_mobileNo'); 
            $table->string('account_landlineNo'); 
            $table->string('account_city'); 
            $table->string('account_state'); 
            $table->string('account_country'); 
            $table->string('account_pincode'); 
            $table->string('account_panNo'); 
            $table->string('account_GSTNo'); 

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

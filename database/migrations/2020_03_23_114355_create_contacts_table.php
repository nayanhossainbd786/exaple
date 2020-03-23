<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('dob')->nullable();

             $table->string('presentAddress')->nullable();
            
             $table->string('streetOne')->nullable();
            
             $table->string('cityOne')->nullable();
            
             $table->string('zipOne')->nullable();
            
             $table->string('countryOne')->nullable();
             $table->string('permanantAddress')->nullable();
             $table->string('streetTwo')->nullable();
             $table->string('zipTwo')->nullable();
             $table->string('countryTwo')->nullable();
             $table->string('cityTwo')->nullable();
             $table->string('homePhone')->nullable();
             $table->string('officePhone')->nullable();
             $table->string('personalPhone')->nullable();
            

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

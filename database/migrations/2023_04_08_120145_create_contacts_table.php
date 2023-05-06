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
            $table->string('ProfileName')->nullable();
          
            $table->string('number')->nullable();
             $table->string('from_cust')->nullable();
              $table->string('SmsStatus')->nullable();
              $table->string('type')->nullable();
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

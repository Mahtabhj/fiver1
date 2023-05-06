<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webusers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
          
             $table->string('email')->nullable();
             $table->integer('number')->nullable();
              $table->string('comment')->nullable();
            //   $table->string('type')->nullable();
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
        Schema::dropIfExists('webusers');
    }
}

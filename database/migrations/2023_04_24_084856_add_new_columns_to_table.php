<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('email', 255)->nullable()->after('ProfileName');
            $table->string('address')->nullable()->after('email');
            $table->string('image')->nullable()->after('address');
            
            $table->string('timezone', 50)->nullable()->after('type');
             $table->string('contact_type')->nullable()->after('SmsStatus');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            //
        });
    }
};

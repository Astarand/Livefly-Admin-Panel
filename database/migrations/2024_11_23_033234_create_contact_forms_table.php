<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('nurse_master', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('l_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('exp_year');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('city');
            $table->string('pincode');
            $table->string('exp_certificate');
            $table->string('highest_qualification');
            $table->string('aadhar_card');
            $table->string('pan_card');
            $table->tinyInteger('nurse_status')
                  ->default(0)
                  ->comment('0 means not verified, 1 means verified');
            $table->tinyInteger('status')
                  ->default(0)
                  ->comment('0 means inactive, 1 means active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_forms');
    }
};

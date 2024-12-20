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
        Schema::create('service_master', function (Blueprint $table) {
            $table->id();
            $table->string('service_name'); // Field for service name
            $table->string('service_description')->nullable(); // Optional field for description
            $table->string('customer_id');
            $table->string('nurse_id');
            $table->date('service_start_date');
            $table->date('service_end_date');
            $table->text('equepment_provided');
            
            // Adding service address fields
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('state');
            $table->string('pincode');
            $table->tinyInteger('status')->default(0)->comment('0 = active, 1 = inactive'); // Status field
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_master');
    }
};

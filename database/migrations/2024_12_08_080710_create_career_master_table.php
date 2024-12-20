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
        Schema::create('career_master', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Career title
            $table->string('location'); // Job location
            $table->string('salary'); // Job salary
            $table->text('description'); // Job description
            $table->int('status'); // status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_master');
    }
};

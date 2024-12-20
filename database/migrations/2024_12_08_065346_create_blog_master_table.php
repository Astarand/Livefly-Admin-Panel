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
        Schema::create('blog_master', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Blog title
            $table->text('content'); // Blog content
            $table->json('images')->nullable(); // Blog images (multiple)
            $table->tinyInteger('status')->default(0); // 0 = Active, 1 = Deactive
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_master');
    }
};

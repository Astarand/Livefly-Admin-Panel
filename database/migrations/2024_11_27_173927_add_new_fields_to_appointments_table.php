<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->string('address1')->nullable()->default(null);
            $table->string('address2')->nullable()->default(null);
            $table->string('city')->nullable()->default(null);
            $table->string('pincode')->nullable()->default(null);
            $table->string('patient_name')->nullable()->default(null);
            $table->text('patient_condition')->nullable()->default(null);
            $table->date('apt_date')->nullable()->default(null);
            $table->time('apt_time')->nullable()->default(null);
            $table->text('apt_message')->nullable()->default(null);
            $table->text('equipmentString')->nullable()->default(null);
        });
    }

    public function down()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropColumn([
                'address1',
                'address2',
                'city',
                'pincode',
                'patient_name',
                'patient_condition',
                'apt_date',
                'apt_time',
                'apt_message',
                'equipmentString',
            ]);
        });
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'phone_no',
        'email',
        'service',
        'service_request_for',
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
    ];
}

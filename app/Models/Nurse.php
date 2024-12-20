<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    use HasFactory;

    protected $table = 'nurse_master';

    protected $fillable = [
        'f_name',
        'l_name',
        'email',
        'phone_number',
        'exp_year',
        'address1',
        'address2',
        'city',
        'pincode',
        'exp_certificate',
        'highest_qualification',
        'aadhar_card',
        'pan_card',
    ];
}

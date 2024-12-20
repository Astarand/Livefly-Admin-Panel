<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'job_candidate';

    // The attributes that are mass assignable
    protected $fillable = [
        'applied_job_id',
        'fname',
        'lname',
        'email',
        'phone_no',
        'apply_for',
        'exp_year',
        'address1',
        'address2',
        'city',
        'pincode',
        'cv_path',
    ];

    // Add any additional properties or methods as needed
}

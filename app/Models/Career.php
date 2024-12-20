<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $table = 'career_master'; // Specify the table name

    protected $fillable = ['title', 'location', 'salary', 'description', 'status'];
}


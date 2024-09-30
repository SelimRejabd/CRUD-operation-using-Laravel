<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'salary',
        'job_title',
        'joining_date',
        'address',
        'mobile_no',
    ];
}

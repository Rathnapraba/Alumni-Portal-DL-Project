<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
   
    protected $table = 'alumni';
    protected $primarykey = 'id';
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'batch',
        'department',
        'address',
        'current_designation',
        'employer_name',
        'work_location',
        'domain',
        'experience_years',
        'highest_degree',
        'present_status',
        'university',
    ];

    
    use HasFactory;
}

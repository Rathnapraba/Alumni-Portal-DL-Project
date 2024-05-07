<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   
    protected $table = 'student1';
    protected $primarykey = 'id';
    protected $fillable = [
        'name',
        'gender',
        'batch',
        'email',
        'mobile',
        'degree',
        'department',
        
    ];

    
    use HasFactory;
}

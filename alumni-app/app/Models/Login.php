<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   
    protected $table = 'login';
    protected $primarykey = 'id';
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'gender',
        'batch',
        'email',
        'password',
        'confirm_password',
        'course',
        'type',
    ];

    
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    protected $table = 'comments';
    protected $primarykey = 'jobpost_id';
    protected $fillable = ['name', 'email', 'comment'];

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Comment;

class Jobpost extends Model 
{
     protected $table = 'jobpost';
    protected $primarykey = 'id';
    protected $fillable = [
        'role', 
        'company_name', 
        'location', 
        'batch', 
        'job_description', 
        'file',
    ];

    
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

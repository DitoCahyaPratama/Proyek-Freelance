<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // use HasFactory;
    protected $table = "jobs";
    protected $fillable = [
        'id_user',
        'name',        
        'description',    
        'date_publish',    
        'date_expired',    
    ];
    public $timestamps=FALSE;
}

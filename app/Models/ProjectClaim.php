<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectClaim extends Model
{
    use HasFactory;

    protected $table = "project_claims";
    protected $fillable = [
        'id_user',
        'id_project',        
        'date_claim', 
        'status'
    ];
    public $timestamps=FALSE;

    public function user() {
        return $this->belongsTo('App\Models\User','id_user','id');
    }
    public function project() {
        return $this->belongsTo('App\Models\Project','id_project','id');
    }
}

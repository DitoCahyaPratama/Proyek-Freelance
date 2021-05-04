<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "projects";
    protected $fillable = [
        'id_user',
        'name',
        'description',
        'dateline',
        'salary',
        'avatar',
        'status',
        'date_publish',
        'date_expired'
    ];
    public $timestamps=FALSE;

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}

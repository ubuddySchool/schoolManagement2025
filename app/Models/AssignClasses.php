<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssignClasses extends Model
{
    protected $table = "assign_classes";
    protected $fillable = ['school_id','session_id','masterClass_id', 'status'];

    
    /**
     * Relationships (if you want to use them)
     */
    public function school()
    {
        return $this->belongsTo(User::class, 'school_id');
    }

    public function session()
    {
        return $this->belongsTo(Schoolsession::class, 'session_id');
    }

    public function class()
    {
        return $this->belongsTo(Master_classes::class, 'masterClass_id');
    }
}

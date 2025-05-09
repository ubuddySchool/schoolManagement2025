<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssignSubjectSchool extends Model
{
    
    protected $table = "assign_subject_schools";
    protected $fillable = ['school_id','session_id','subject_id','status'];
    protected $casts = [
        'subject_id' => 'array',
    ];
    
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

    public function subject()
    {
        return $this->belongsTo(Master_subjects::class, 'module_id');
    }
}

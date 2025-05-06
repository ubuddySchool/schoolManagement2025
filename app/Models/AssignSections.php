<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssignSections extends Model
{
    protected $table = "assign_sections";
    protected $fillable = ['school_id','session_id','class_id', 'section_name', 'status'];
    protected $casts = [
        'section_name' => 'array',
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

    public function class()
    {
        return $this->belongsTo(Master_classes::class, 'class_id');
    }
}

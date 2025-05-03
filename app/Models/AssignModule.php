<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssignModule extends Model
{
    protected $table = "assign_modules";
    protected $fillable = ['school_id','session_id','module_id','status'];
    protected $casts = [
        'module_id' => 'array',
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

    public function module()
    {
        return $this->belongsTo(Mastermodule::class, 'module_id');
    }

}

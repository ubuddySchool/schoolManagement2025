<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssignModule extends Model
{
    protected $table = "assign_modules";
    protected $fillable = ['school_id','session_id','module_id','status'];
}

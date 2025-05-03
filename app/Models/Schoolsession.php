<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schoolsession extends Model
{
    protected $table = 'schoolsessions';
    protected $fillable = ['session_id','school_id','start_date','end_date'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schoolsession extends Model
{
    protected $table = 'schoolsession';
    protected $fillable = ['school_session','school_id'];
}

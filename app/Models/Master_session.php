<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Master_session extends Model
{
    
    protected $table = 'master_sessions';
    protected $fillable = [
        'session_name',
    ];
}

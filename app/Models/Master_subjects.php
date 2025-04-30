<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Master_subjects extends Model
{
    protected $table = 'master_subjects';
    protected $fillable = [
        'subject_name',
    ];
}

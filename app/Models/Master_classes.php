<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Master_classes extends Model
{
    protected $table = 'master_classes';
    protected $fillable = [
        'class_name',
    ];
}

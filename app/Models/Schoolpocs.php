<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schoolpocs extends Model
{
    use HasFactory;

    protected $table = 'school_pocs';
    protected $fillable = [
        'school_id',
        'poc_name',
        'poc_gender',
        'poc_dob',
        'poc_designation',
        'poc_contact_number',
        'poc_alternate_contact_number',
        'poc_email',
        'poc_status',
    ];

    protected $hidden = [];
}
